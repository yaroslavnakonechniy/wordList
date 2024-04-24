<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;

class DestroyController extends Controller
{
    public function __invoke($word_id){
        
        $word = Word::find($word_id);
        $word->delete();

        return redirect()->route('words.index')->with('success', 'Дані булo видалено успішно');
    }
}
