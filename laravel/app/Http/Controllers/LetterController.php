<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Letter;

class LetterController extends Controller
{
    public function index(){
    $letters = Letter::all()->sortByDesc('created_at');
    return view('letters.index',['letters'=> $letters]);
  }
}
