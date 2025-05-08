<?php

namespace App\Http\Controllers;

use App\Models\DestinasiPopuler;
use Illuminate\Http\Request;

class DestinasiPopulerController extends Controller
{
    public function index(){
        $destinasi = DestinasiPopuler::all();

        return view('index', compact('destinasi'));
    }
}
