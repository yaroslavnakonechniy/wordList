<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Word;

class StoreController extends Controller
{
    public function __invoke( Request $request){

            $words = new Word();
    
            $words->title = $request->input('title');
            $words->onenglish = $request->input('onenglish');
            $words->onpolish = $request->input('onpolish');
            $words->description = $request->input('description');
        
            $words->save();
            
            return redirect()->route('words.index')->with('success', 'Дані булo додано успішно');
        }
    
}
