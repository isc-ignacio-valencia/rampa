<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\ReCaptcha;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
        ]);
    }

    public function mail(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required'],
            'fullName' => ['required'],
            'message' => ['required'],
            'g-recaptcha-response' => ['required', new ReCaptcha],
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

        return redirect()->back()->with(['successMessage' => 'Contact Form Submit Successfully'],);
    }
}
