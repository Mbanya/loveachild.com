<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function postContact(ContactFormRequest $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $comment = $request->get('comment');

        $data = [
            'name'=>$name,
            'email'=> $email,
            'subject'=> $subject,
            'comment'=>$comment
        ];

        Mail::send(new ContactUs($data));
        return redirect('/contact')
        ->with('status', 'Thank you for contacting us.');
    }

}
