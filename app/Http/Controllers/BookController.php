<?php

namespace App\Http\Controllers;

use App\Book;
use App\Digest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * 书目列表
     * @return Factory|Application|View
     */
    function bookList()
    {
        $books = Book::where('status', 1)
            ->orderBy('sort')
            ->get();
        return view('book_list', ['books' => $books]);
    }

    /**
     * 图书详情
     * @param Book $book
     * @return Factory|Application|View
     */
    function bookDetail(Book $book)
    {
        $digests = Digest::where('bookid', $book->id)
            ->where('status', 1)
            ->orderBy('created_at')
            ->get();

        return view('detail', ['book' => $book, 'digests' => $digests]);

    }

    /**
     * 添加图书页面
     * @return Factory|Application|View
     */
    function addBook() {
        return view('book_add');
    }

    /**
     * 添加图书 post
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    function storeBook(Request $request)
    {
        $book = new Book();
        $book->name = $request->input("name");
        $book->author = $request->input("author");
        $book->sort = $request->input("sort");
        $book->save();

        return redirect('/book_list');
    }

    /**
     * 编辑书摘
     * @param Book $book
     * @param Digest $digest
     * @return Factory|Application|View
     */
    function digestEdit(Book $book, Digest $digest)
    {
        return view('digest_edit', ['book' => $book, 'digest' => $digest]);
    }


    /**
     * 编辑书摘
     * @param Book $book
     * @param Digest $digest
     * @return Application|RedirectResponse|Redirector
     */
    function updateBookDigest(Book $book, Digest $digest)
    {
        $digest->bookid = $book->id;
        $digest->content = \request('content');
        $digest->status = 1;
        $digest->save();
        return redirect('/book_detail/' . $book->id);
    }


    /**
     * 删除书摘
     * @param Request $request
     * @return bool[]
     */
    function deleteDigest(Request $request)
    {
        $id = $request->input('id');

        Digest::destroy($id);
        return ["status" => true];
    }

    /**
     * 添加书摘页面
     * @param Book $book
     * @return Factory|Application|View
     */
    function addDigest(Book $book) {
        $books = Book::where('status', 1)
            ->orderBy('sort')
            ->get();
        return view('digest_add', ['books' => $books, 'selectBook' => $book]);
    }

    /**
     * 保存书摘
     */
    function storeDigest(){
        $bookId = request('select_book_id');
        $content = request('content');
        $digest = new Digest();
        $digest->bookid = $bookId;
        $digest->content = $content;
        $digest->save();
        return redirect('/book_detail/' . $bookId);
    }


//    function addDigest(Book $book)
//    {
//        $digest = new Digest();
//        $digest->bookid = $book->id;
//        $digest->content = \request('content');
//        $digest->status = 1;
//        $digest->save();
//        return redirect('/bookDetail/' . $book->id);
//    }


}
