<?php

namespace App\Http\Controllers;

use App\Models\DestinasiPopuler;
use Illuminate\Http\Request;

class DestinasiPopulerController extends Controller
{
    public function index(){
        $destinasi = DestinasiPopuler::all();
        // dd($destinasi);
        return view('index', compact('destinasi'));
    }
}
