<?php

namespace App\Http\Controllers;

use App\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $authors = Author::all();
        return view('authors.index')->with('authors', $authors);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'FIO' => 'required|max:191|unique:authors,FIO',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')->with('success','Автор успешно добавлен');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view('authors.show')->with('author',$author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {

        return view('authors.edit')->with('author',$author);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {

        $request->validate([
            'FIO' => 'required|max:191|unique:authors,FIO',
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')->with('success','Данные об авторе успешно изменены');        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {

        $author->delete();

        return redirect()->route('authors.index')->with('success','Автор успешно удален');
        
    }
}
