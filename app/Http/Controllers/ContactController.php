<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'message' => 'required|string',
        ]);

        // rename the 'message' key to 'msg' to avoid conflict
        $data['msg'] = $data['message'];
        unset($data['message']);

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            $mail->to('dmoreno03321@gmail.com')
                ->subject('New Contact Message from Portfolio')
                ->from($data['email'], $data['name']);
        });

        // SUCCESS MESSAGE
        return back()->with('success', 'Message sent successfully!');
    }
}
