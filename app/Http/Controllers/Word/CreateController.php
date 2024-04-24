<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Word;


class CreateController extends Controller
{
    public function __invoke(){
       

        return view('word.create');
    }

}
