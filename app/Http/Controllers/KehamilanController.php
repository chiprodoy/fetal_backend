<?php

namespace App\Http\Controllers;

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
}
