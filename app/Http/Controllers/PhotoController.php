<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(){
        return view('Photo.create');
    }
    public function album(Request $request ){
        dd($request->all());
    }
}
