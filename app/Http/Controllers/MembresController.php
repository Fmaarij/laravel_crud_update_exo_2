<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function index(){
        $members = membres::all();
        return view('home', compact('members'));
    }
}
