<?php

namespace App\Http\Controllers;

use App\Models\Kebudayaan;
use Illuminate\Http\Request;

class KebudayaanController extends Controller
{
    public function index () {
        $budaya = Kebudayaan::all();

        return view('index', compact('budaya'));
    }

    public function getKebudayaan() {
        return Kebudayaan::all();
    }
}
