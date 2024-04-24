<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;

class IndexController extends Controller
{
    public function __invoke(){
        
        $words =  Word::all();
        return view('word.index', compact('words'));
    }

}
