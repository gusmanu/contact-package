<?php

namespace Gusmanu\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gusmanu\Contact\Models\Contact;
use Gusmanu\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
