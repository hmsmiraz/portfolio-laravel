<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('hmsmiraz64729@gmail.com')->send(new ContactMail($request->name, $request->email, $request->body));
        return response()->json('success');
    }
}
