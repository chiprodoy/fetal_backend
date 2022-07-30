<?php

namespace App\Http\Controllers;

use App\Http\Requests\KehamilanRequest;
use App\Models\Kehamilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MF\Controllers\ControllerResources;
use MF\Controllers\ApiResponse;

class KehamilanController extends Controller
{
    use ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;}
    use ApiResponse;

    public $namaModel=Kehamilan::class;
    public $title="Kehamilan";
    public $controllerName='kehamilan';


    public function __construct()
    {
        $this->__ctrlResConstruct();
        $this->addAction=route('kehamilan.create');
        $this->saveAction=route('kehamilan.store');
        $this->readAction=route('kehamilan.index');
    }

     /**
     * Show all kehamilan
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function index(){
       // $data=Kehamilan::whereRelation('user','uid',$userUid);
       if(Auth::user()->isRole('Super Admin')){
        $data=Kehamilan::orderBy('created_at', 'desc');

       }else{
            $data=Kehamilan::where('user_id',Auth::user()->id);

       }

        if($data->count())  return $this->success($data->get(),'Berhasil');
        else return response()->noContent();
    }

     /**
     * Tambah kehamilan
     * @authenticated
     * @bodyParam kehamilan_ke int required
     * @bodyParam hari_pertama_haid date required
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function store(KehamilanRequest $request){
        $request->validated();
         // Retrieve a portion of the validated input data...
        $data=Kehamilan::create([
            'uuid'=>null,
            'kehamilan_ke'=>$request->kehamilan_ke,
            'hari_pertama_haid'=>$request->hari_pertama_haid,
            'usia_kehamilan'=>null,
            'user_id'=>Auth::user()->id
        ]);
        if($data)  return $this->success($data,'Berhasil');
        else return response()->noContent();
    }
}
