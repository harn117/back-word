<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
        public function store(Request $request)
        {
            $word = new Words;
            $word->name = $request->name;
            $word->save();
        }
}
