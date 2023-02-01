<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function sendmail(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'objet'=>'required',
            'message'=>'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message
        ];

        Mail::send('email-template', $data, function($message) use ($data){
            $message->to($data['email'])
            ->subject($data['objet']);
        });



        return back()->with(['message'=>'Email envoyer avec success']);
        // return back();
    }
}
