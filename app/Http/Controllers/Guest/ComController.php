<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\comic;
use Illuminate\Http\Request;


class ComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comic::all();
        return view('/', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $formData = $addComic->all();
        // $newComic = new Comic;
        // $newComic->title = $addComic['title'];
        // $newComic->description = $addComic['description'];
        // $newComic->thumb = $addComic['thumb'];
        // $newComic->price = $addComic['price'];
        // $newComic->sale_date = $addComic['sale_date'];
        // $newComic->type = $addComic['type'];
        // foreach($addComic['artists'] as $key => $artist){
        //     if($key < count($addComic['artists']) -1){
        //       $newComic->artists .= $artist . ', ';  
        //     } else{
        //         $newComic->artists .= $artist . '.';  
        //     }
            
        // }
        // foreach($addComic['writers'] as $key => $writer){
        //     if($key < count($addComic['writers']) -1){
        //         $newComic->writers .= $writer . ', ';
        //     } else{
        //         $newComic->writers .= $writer . '.';
        //     }
            
        // }
        // $newComic->save();
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
