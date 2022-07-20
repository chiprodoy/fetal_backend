<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use MF\Controllers\ApiResponse;
use MF\Controllers\ControllerResources;

class PostController extends Controller
{
    use ApiResponse;
    use ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;}

    public $namaModel=Post::class;
    public $title="Post";
    public $controllerName='post';


    public function __construct()
    {
        $this->__ctrlResConstruct();
        $this->addAction=route('kehamilan.create');
        $this->saveAction=route('kehamilan.store');
        $this->readAction=route('kehamilan.index');
    }

       /**
     * Show all POST by kategori
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function indexByCategory($slug){
        $pc=Post::with(['categories'=>function($query)use($slug){
            $query->where('slugs','=',$slug);

        }]);

        if($pc->count())  return $this->success($pc->get(),'Berhasil');
        else return response()->noContent();
    }

     /**
     * Show a POST by slug
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     **/
    public function show($slug){
        $pc=Post::with('categories')->where('slug',$slug);

        if($pc->count())  return $this->success($pc->get(),'Berhasil');
        else return response()->noContent();
    }
}
