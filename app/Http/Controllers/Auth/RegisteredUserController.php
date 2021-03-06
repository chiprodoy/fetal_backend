<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Auth\RegisterUserRequest;
use MF\Controllers\ApiResponse;
class RegisteredUserController extends Controller
{
    use ApiResponse;
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterUserRequest $request)
    {
        $validated = $request->safe()->only(
            [
                'name',
                'email',
                'password',
                'tempat_lahir',
                'tgl_lahir',
                'pekerjaan',
                'pendidikan',
                'jumlah_anak'
        ]);

        $user = User::create($validated);

        $user->roles()->attach(2,['user_modify'=>'su']);

        event(new Registered($user));
        if($request->wantsJson()){
            return $this->success(null,'Pendaftaran Berhasil Silahkan Cek Email Untuk konfirmasi');
        }else{
            return redirect(RouteServiceProvider::HOME);

        }
        //Auth::login($user);

    }
}
