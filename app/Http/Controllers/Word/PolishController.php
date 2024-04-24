<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;

class PolishController extends Controller
{
    public function __invoke(){
        
        $words =  Word::all();
        return view('word.polish', compact('words'));
    }

}