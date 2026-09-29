<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showForm()
    {
        return view('greeting.form');
    }

    public function greet(Request $request)
    {
        $name = $request->input('name');

        if (empty($name)) {
            $name = 'ゲスト';
        }

        $hour = now('Asia/Tokyo')->hour;

        if ($hour < 12) {
            $greeting = 'おはようございます';
        } elseif ($hour < 18) {
            $greeting = 'こんにちは';
        } else {
            $greeting = 'こんばんは';
        }

        return view('greeting.result', [
            'name' => $name,
            'greeting' => $greeting
        ]);
    }
}