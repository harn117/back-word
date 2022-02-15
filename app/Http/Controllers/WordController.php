<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    public function getData()
    {
        return DB::table('words')->get();
    }
    public function store(Request $request)
    {
        $word = new Word;
        $word->word = $request->word;
        $word->word_inv = $request->wordCompare;
        $word->anagrams = $request->anagrams;
        $word->save();
        return $word;
    }
}
