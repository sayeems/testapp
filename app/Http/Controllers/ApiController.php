<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;
use App\Http\Resources\BookResource;

class ApiController extends Controller
{
    //list of books
    public function bookList()
    {
        $books = Book::all();
        return BookResource::collection($books);
    }
    //single book
    public function singleBook($id)
    {
        $book = Book::findorfail($id);
        return new BookResource($book);
    }
    //single book
    public function updateBook(Request $request)
    {
        // return $request->name;
        // $book = $request->isMethod('PUT') ? Book::findorfail($request->book_id) : new Book;
        // $book = new Book;
        // $book->id = $request->input('book_id');   
        // $book->title = $request->input('name');   
        // $book->storyline = $request->input('story');
        // $book->user_id = 1;
        // $book->id = 100;   
        // $book->title = 'fake';   
        // $book->storyline = 'fake';
        // $book->user_id = 1;
        if($request->book_id){
            $book = Book::findorfail($request->book_id);
        }
        else{
            $book = new Book;
        }
           
        $book->title = $request->name;   
        $book->storyline = $request->story;
        
        // return $book->save();
        if($book->save()){
            return new BookResource($book);
        }
    }
    //single book
    public function deleteBook($id)
    {
        $book = Book::findorfail($id);
        if($book->delete()){
            return new BookResource($book);
        }
    }
}
