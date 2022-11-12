<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\PengingatPergerakanJanin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function test(){
        return view('notification.test');

    }
        //
    public function send(){
        $user=User::find(1);
        $user->notify(new PengingatPergerakanJanin);

    }
}
