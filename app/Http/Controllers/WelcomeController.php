<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World'; // Atau return ('Hello World');  Keduanya valid
    }

    public function greeting() {
        return view('blog.hello', ['name' => 'Andi']);
    }
}