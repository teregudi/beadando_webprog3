<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $trim = str_replace('<p>', '', $request->input('message'));
        $trim = str_replace('</p>', '', $trim);
        $message->message = $trim;
        $message->save();

        return redirect()->route('home')->with('success', 'Message successfully sent!');
    }

    public function getMessages() {
        $messages = Message::all();

        return view('messages', ['messages' => $messages]);
    }
}
