<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;

class EditController extends Controller
{
    public function __invoke($word_id){
        $word = Word::find($word_id);


        return view('word.edit', compact('word'));
    }

}
