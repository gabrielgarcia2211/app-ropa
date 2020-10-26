<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
    public function getMail(Request $request)
    {
        $data = ['name' => $request->input('name'),
            'asunto' => $request->input('subject'),
            'messag' => $request->input('message')
            ];
        Mail::to($request->input('email'))->send(new TestMail($data));//aca se cambie por el remitente
        Alert::success('Correo enviado', 'koko.swimear');
        return back();
    }
}
