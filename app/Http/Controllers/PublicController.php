<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function showHomepage() {
        return view('home');
    }

    public function showChisiamo() {

        $personal = [
            [
                'id' => 1,
                'name' => 'Nicola',
                'lastname' => 'Tesan',
                'age' => '25',
                'info' => 'informazioni private'
            ],
            [
                'id' => 2,
                'name' => 'Nicola',
                'lastname' => 'Tesan',
                'age' => '30',
                'info' => 'informazioni private'
            ],
            [
                'id' => 3,
                'name' => 'Nicola',
                'lastname' => 'Tesan',
                'age' => '30',
                'info' => 'informazioni private'
            ],
            [
                'id' => 4,
                'name' => 'Nicola',
                'lastname' => 'Tesan',
                'age' => '30',
                'info' => 'informazioni private'
            ],
            [
                'id' => 5,
                'name' => 'Nicola',
                'lastname' => 'Tesan',
                'age' => '30',
                'info' => 'informazioni private'
            ],
            [
                'id' => 6,
                'name' => 'Nicola',
                'lastname' => 'Tesan',
                'age' => '30',
                'info' => 'informazioni private'
            ]
        ];

        return view('chisiamo', ['personal' => $personal]);
    }

    public function showServizi() {
        return view('servizi');
    }

    public function showContatti() {
        return view('contatti');
    }

    public function contactSubmit(Request $request) {
        $userName = $request->input('name');
        $userLastname = $request->input('lastname');
        $email = $request->input('email');
        $message = $request->input('message');

        $user_contact = compact('userName', 'userLastname', 'email', 'message');

        Mail::to($email)->send(new ContactMail($user_contact));

        return redirect(route('home'));
    }
}