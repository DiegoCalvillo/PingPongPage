<?php

namespace PingPong\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use PingPong\Http\Controllers\Controller;
use PingPong\Http\Requests;

class MailController extends Controller
{
    public function store(Request $request)
    {
        Mail::send('emails.contact', $request->all(), function($msj){
            $msj->subject('Correo de contacto');
            $msj->to('diegocalvillordz@pingponginnovation.com');
        });
        
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/contact');
    }
}
