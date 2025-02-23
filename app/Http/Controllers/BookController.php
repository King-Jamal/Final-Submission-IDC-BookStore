<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
       return response($books,200);
    }
    public function show($id){
        $book=Book::find($id);
        if(!$book){
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book->toArray());
    }
    public function destroy(Book $book, $id){
        $book=Book::find($id);
        if(!$book){
           return response()->json(['message' => 'Book not found'], 404); 
        }
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'description' => 'required|string|max:255',
        ],[
            'title.required'=>'Title is required',
            'author.required'=>'Author is required',
            'description.required'=>'Description is required',
        ]);
        $create=Book::create([
            'title'=>$request->title,
            'author'=>$request->author, 
            'description'=>$request->description
        ]);
        if($create){
            return response()->json(['message' => 'Book created successfully','book'=>$create], 201);
        }
        return response()->json(['message' => 'Book not created'], 500);
    }
    public function update(Request $request,$id){
        $book=Book::find($id);
        if(!$book){
            return response()->json(['message' => 'Book not found'], 404);
        }
        $request->validate([
            'title'=>'required|string|max:255',
            'author'=>'required|string',
            'description'=>'required|string|max:255',
        ],[
            'title.required'=>'Title is required',
            'author.required'=>'Author is required',
            'description.required'=>'Description is required',
        ]);
        $updated=$book->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'description'=>$request->description
        ]);
        if($updated){
            return response()->json(['message' => 'Book updated successfully','book'=>$book], 200);
        }
        return response()->json(['message' => 'Book not updated'], 500);
    }
    public function edit($id){
        $book=Book::find($id);
        If(!$book){
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book->toArray());
    }
}
