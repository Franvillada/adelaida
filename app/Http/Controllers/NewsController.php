<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(9);
        return view('news')->with('news',$news);
    }

    public function create(){
        return view('backoffice.noticias');
    }

    public function store(Request $request){
        
        $rules=[
            'title' => 'required',
            'description' => 'required|max:255',
            'category' => 'required',
            'link' => 'required'
        ];
        
        $messages =[
            'title.required' => 'El campo titulo es necesario',
            'description.required' => 'El campo descripcion es necesario',
            'description.max' => 'La descripcion puede tener 255 caracteres como maximo',
            'category.required' => 'El campo categoria es necesario',
            'link.required' => 'El campo link es necesario'
        ];
        
        $validator = $this->validate($request, $rules, $messages);
        $news = new News;
        
        $news->title = $validator['title'];
        $news->description = $validator['description'];
        $news->category = $validator['category'];
        $news->link = $validator['link'];
        
        $news->save();
        
        return redirect()->route('home');
    }
}
