<?php

namespace App\Http\Controllers;

use App\Http\Requests\KehamilanRequest;
use App\Models\Kehamilan;
use Illuminate\Http\Request;
use MF\Controllers\ControllerResources;

class KehamilanController extends Controller
{
    use ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;}

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
    public function index($userUid){
        $data=Kehamilan::whereRelation('user','uid',$userUid);

        if($data->count())  return $this->success($data->get(),'Berhasil');
        else return response()->noContent();
    }

     /**
     * Tambah kehamilan
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function store(KehamilanRequest $request){
        $request->validate();

        if($data->count())  return $this->success($data->get(),'Berhasil');
        else return response()->noContent();
    }
}
