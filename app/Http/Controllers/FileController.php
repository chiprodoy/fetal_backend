<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //
    public function show($slug){
        $pc=Post::where('slug',$slug)->latest()->first();
        if($pc){
            if(Storage::exists($pc->multimedia)){
                return Storage::download($pc->multimedia);
            }

        }
        else return response()->noContent();
    }
}
