<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Method-method untuk PostController bisa ditambahkan di sini
    public function index() {
        return view('post.index'); // Contoh return view
    }
}