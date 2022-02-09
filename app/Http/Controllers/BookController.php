<?php

namespace App\Http\Controllers;

use App\Book;
use App\Digest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    function getBookList() {
        $books = Book::where('status', 1)
            ->orderBy('sort')
            ->get();
        return view('list', ['books' => $books]);
    }

    function getBookDetail(Book $book) {
        $digests = Digest::where('bookid', $book->id)
            ->where('status', 1)
            ->orderBy('created_at')
            ->get();

        return view('detail', ['book' => $book, 'digests' => $digests]);

    }

    function deleteDigest(Request $request) {
        $id = $request->input('id');

        Digest::destroy($id);
        return ["status" => true];
    }


}
