<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
Use File;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('pages.books')->with('books', $books); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r( $request->input('name') );
        $this->validate($request, [
            'name' => 'required',
            'storyline' => 'required'
        ]);
        
        // return 'successful';
        $book = new Book;
        if($files = $request->file('cover_image')){
            $path = 'public/book_cover_images/';
            $cover_image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($path, $cover_image);
            $book->cover_image = $cover_image;
        }
        $book->title = $request->input('name');
        $book->storyline = $request->input('storyline');
        $book->save();
        return redirect(url('/books'))->with('success', 'Your book was added successfully!');

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
