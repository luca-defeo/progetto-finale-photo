<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }
    
    public function  contacts () {
        return view ('contacts');
    }
    
    public function contacts_submit (Request $request) {
  
 
        /*   $name=$request->input('name');
           $email=$request->email;                tramite il dd è possibile vedere i dati inseriti
           $message=$request->message;             qualora richiesti
           dd($name, $email, $message); */
    }

}
