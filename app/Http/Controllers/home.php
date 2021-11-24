<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
class home extends Controller
{

    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $fields = [
            'name' => 'required|max:100',
            'lastName' => 'required|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|integer',
            'message' => 'required|max:200',
            'politics' => 'required',
        ];
        $msg =[
            'name.required'=>'El nombre es necesario',
            'lastName.required'=>'El apellido es necesario',
            'email.required'=>'El correo es necesario',
            'email.email'=>'Proporcione un correo valido',
            'phone.required'=>'El numero es necesario',
            'phone.integer'=>'Ingrese solo números',
            'message.required'=>'El mensaje es necesario',
            'politics.required'=>'No ha aceptado la política de privacidad',
        ];

        $this->validate($request, $fields, $msg);

        $mail = new ContactMailable($request->all());
        Mail::to('jobs@talentscode.com')->send($mail);
        
        // return 'Correo enviado';
        return redirect()->route('home')->with('status','Hemos recibido su correo, nos pondremos en contacto muy pronto.');
    }
}
