<?php

namespace App\Http\Controllers;

use App\News;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = [];
        $i = 0;
        $news = News::all()->reverse();
        foreach ($news as $value) {
            if($arr == null){
                $arr[0] = $value;
            }elseif($value->category != $arr[0]->category){
                if(isset($arr[1])){
                    $arr[2] = $value;
                }else {
                    $arr[1] = $value;
                }
            }
            if(isset($arr[0]) && isset($arr[1]) && isset($arr[2])){
                break;
            }
        }
        $image = Image::all()->last();
        return view('home')->with('arr',$arr)->with('image',$image);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
