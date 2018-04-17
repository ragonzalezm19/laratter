<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class MessagesController extends Controller
{
    //
    public function show(Message $message)
    {
        // $message = Message::find($id);

        return view('messages.show', [
            'message' => $message,
        ]);
    }

    public function create(CreateMessageRequest $request)
    {
       $message = Message::create([
           'content' => $request->input('message'),
           'image' => 'http://lorempixel.com/600/338?' . mt_rand(0, 1000)
       ]);

       return redirect("/messages/$message->id");
    }
}
