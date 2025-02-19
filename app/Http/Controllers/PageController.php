<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        $nama = "Adani Salsabila"; // Ganti dengan nama Anda
        $nim = "2341720123"; // Ganti dengan NIM Anda
        return "Nama: " . $nama . "<br>NIM: " . $nim;
    }

    public function articles($id) {
        return "Halaman Artikel dengan Id " . $id;
    }
}