<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
        ]);
    }

    public function mail(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required'],
            'fullName' => ['required'],
            'message' => ['required'],
        ]);

        $fullName = $request->fullName;
        $email = $request->email;
        $eventKind = $request->eventKind;
        $day = $request->day;
        $message = $request->message;


        DB::table('contactform')->insert([
            'fullName'   => $fullName,
            'email'  => $email,
            'eventKind'  => $eventKind,
            'day'  => $day,
            'message'  => $message,
        ]);

        return view('home', [
            
        ]);
    }
}
