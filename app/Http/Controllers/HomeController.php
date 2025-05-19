<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $destinasi = (new DestinasiPopulerController)->getDestinasi();
        $kebudayaan = (new KebudayaanController)->getKebudayaan();

        return view('index', compact('destinasi', 'kebudayaan'));
    }
}
