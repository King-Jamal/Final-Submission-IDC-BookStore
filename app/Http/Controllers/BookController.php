<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\BookResource;
use Illuminate\Support\Facades\Validator;

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
        $validator=Validator::make($request->all(),[
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'description' => 'required|string|max:255',
        ]);
        if($validator->fails()){
            return response()->json(['message' => 'Book not created','error'=>$validator->errors()], 422);
        }
            return response()->json(['message' => 'Book created successfully','book'=>$validator->validated()], 201);
        
    }
    public function update(Request $request,$id){
        $book=Book::find($id);
        if(!$book){
            return response()->json(['message' => 'Book not found'], 404);
        }
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|max:255',
            'author'      => 'required|string',
            'description' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Book update failed',
                'errors'  => $validator->errors()
            ], 422);
        }
    
        $book->update($validator->validated());
        return response()->json(['message' => 'Book updated successfully', 'book' => $book], 200);
    }
    public function edit($id){
        $book=Book::find($id);
        If(!$book){
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book->toArray());
    }
}
