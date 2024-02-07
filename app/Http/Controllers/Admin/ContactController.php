<?php

namespace App\Http\Controllers\Admin;
use App\Mail\ContactMail;
use App\Mail\ContactReplyMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
     public function index ()
     {
        $contact = Contact::get();
        return view('admin.contact_management.index',compact('contact'));
     }
     public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        // dd($data);
        $mailData = Contact::create($data);
        Mail::to('descoinnovative@gmail.com')->send(new ContactMail($mailData));
        Mail::to($request['email'])->send(new ContactReplyMail($mailData));
        return redirect()->back()->with('success', 'We recieved your message, Our team contact shortly Thank You!');
    }
}
