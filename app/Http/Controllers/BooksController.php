<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;
use DB;
class BooksController extends Controller
{
    //
    public function index(Request $request)
    {
      // code...
      return Book::withCount('comments AS commentcount')->get();
    }
    public function store(Request $request)
    {
      // code...
      $title = $request->get('title');
      if ((empty($title)&&!$request->has('title')) ) {
        return "missing required field title";
      }
      $book = new Book;
      $book->title = $title;
      $book->save();
      return $book;
    }
    public function show(Request $request,$id)
    {
      // code...
      $book = Book::where('_id', $id)->with('comments')->first();
      if (!Book::where('_id', $id)->count()) {
        return "no book exists";
      }
      return $book;
    }
    public function deleteall(Request $request)
    {
      // code...
      DB::table('books')->truncate();
      return "complete delete successful";

    }
    public function delete(Request $request,$id)
    {
      // code...
      $book = Book::where('_id', $id)->with('comments')->first();
      if (!Book::where('_id', $id)->count()) {
        return "no book exists";
      }
      $book->delete();
      return "delete successful";

    }
    public function update(Request $request,$id)
    {
      // code...
      $comment = $request->get('comment');
      if ((empty($comment)) ) {
        return "missing required field comment";
      }
      if (!Book::where('_id', $id)->count()) {
        return "no book exists";
      }
      $comment = new Comment;
      $comment->comment = $request->comment;
      $comment->book_id = $request->id;
      $comment->save();
      $book = Book::where('_id', $id)->with('comments')->get();

      return $book;
    }
}
