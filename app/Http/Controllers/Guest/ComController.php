<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index() {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $newComic = new Comic;
        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->thumb = 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX';
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->artists = $formData['artists'];
        $newComic->writers = $formData['writers'];
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $newComic = Comic::find($id);
        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->artists = $formData['artists'];
        $newComic->writers = $formData['writers'];
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}