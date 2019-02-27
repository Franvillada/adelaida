<?php

namespace App\Http\Controllers;

use App\Image;
use App\Phrase;
use Illuminate\Http\Request;

class PhraseController extends Controller
{
    public function index()
    {
        $image = Image::all()->last();
        $phrase = Phrase::all()->last();
        return view('backoffice.encabezado-principal')->with('image',$image)->with('phrase',$phrase);
    }

    public function store(Request $request)
    {
        $newPhrase = new Phrase;
        $newPhrase -> principle = $request -> titulo;
        
        $newPhrase ->save();
        return redirect()->route('encabezado-principal');
    }
}
