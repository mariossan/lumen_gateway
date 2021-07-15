<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }


    /*
    * Method to return list of Books
    * @return Illuminate\Http\Response
    */
    public function index()
    {
    }

    /*
    * Method to return list of Books
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    }

    /*
    * Method to create an author
    * @return Illuminate\Http\Response
    */
    public function show($book)
    {
    }

    /*
    * Method to return list of Books
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $book)
    {
    }

    /*
    * Method to return list of Books
    * @return Illuminate\Http\Response
    */
    public function destroy($book)
    {
    }
}
