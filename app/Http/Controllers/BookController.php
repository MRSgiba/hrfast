<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::all();
        return view('books.index')->with('books', $books);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create')->with('authors', $authors);
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
            'name' => 'required|max:191|unique:books,name',
            'price' => 'numeric|min:0.01|max:9999999.99',
            'author_id' => 'required'            
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success','Книга успешно добавлена');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit')->with(['book'=>$book,'authors'=>$authors]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

        $request->validate([
            'name' => 'required|max:191|unique:books,name',
            'price' => 'numeric|min:0.01|max:9999999.99',
            'author_id' => 'required'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success','Данные об книге успешно изменены');        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {

        $book->delete();

        return redirect()->route('books.index')->with('success','Книга успешно удалена');
        
    }
}
