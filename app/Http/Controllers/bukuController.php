<?php

namespace App\Http\Controllers;

use App\Models\bukus;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index(){
        $buku =bukus::all();
        return view('welcome',compact('buku'));
    }
}
