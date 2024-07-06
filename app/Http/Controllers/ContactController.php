<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Abonner;
use Illuminate\Http\Request;
use App\Http\Requests\RequestContact;


class ContactController extends Controller
{
    //
    public function contact(RequestContact $request)
    {

        $user = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' =>$request->subject,
            'message' => $request->message,
          
        ]);

        return redirect()->route('contact')->with('success', 'Votre message a été envoyer avec success !');

    }

    public function abonner(Request $request)
    {

        $user = Abonner::create([
           
            'email' => $request->email
        ]);

        return redirect()->back()->with('abonné', 'Abonnement réussi!');

    }
}
