<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DwiController extends Controller
{
    public function index (){
        return view('novitasari.index');
    }
    public function index_next (){
        return view('novitasari.index_next');
    }
}

