<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'nama' => 'Alif Maulana',
            'alamat' => 'Pandeglang, Banten'
        ];
        return view('v_home', $data);
    }
    public function about($id) {
        return 'Ini Halaman About'. $id;
    }
}
