<?php

namespace App\Http\Controllers;

use App\Image;
use App\Phrase;
use Illuminate\Http\Request;


class ImageController extends Controller
{
    public function index(){
        $image = Image::all()->last();
        $phrase = Phrase::all()->last();
        return view('backoffice.imagen-principal')->with('image',$image)->with('phrase',$phrase);
    }

    public function store(Request $request){
        $newImage = new Image;
        if($request->file('background-image') != null)
        {
            $file = $request->file('background-image');
            $name = 1 . "." . $file->extension();
            $folder = "public/background-images";
            $path = $file->storePubliclyAs($folder,$name);
            $newImage->photo_path = 'storage/background-images/'.$name;
        }

        $newImage->save();

        return redirect()->route('imagen-principal');
    }


}
