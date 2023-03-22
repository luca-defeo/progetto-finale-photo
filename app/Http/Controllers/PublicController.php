<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        /* try and catch ha quasi la stessa funzionalità di if e else */
        try{
           Mail::to('example@ci.it')->send(new ContactMail());
        } catch (\Exception $e) {

            return redirect()->back()->with(`EmailError`, `C'è stato un problema con l'invio dell'email riprova più tardi`); 
        }

           return redirect(route('contacts'))->with('EmailSented', 'Email inviata con successo!');
           
    }

}
