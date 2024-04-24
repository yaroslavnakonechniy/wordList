<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Word;


class UpdateController extends Controller{
    public function __invoke( Request $request, $word_id){

        $word = Word::find($word_id);

        $word->title = $request->input('title');
        $word->onenglish = $request->input('onenglish');
        $word->onpolish = $request->input('onpolish');
        $word->description = $request->input('description');
    
        $word->save();
        
        return redirect()->route('words.index')->with('success', 'Дані булo додано успішно');
    }

}
