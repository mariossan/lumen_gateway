<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        return $this->successResponse(
            $this->bookService->getAll()
        );

    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        return $this->successResponse(
            $this->bookService->create(
                $request->all(),
                Response::HTTP_CREATED
            )
        );
    }

    /*
    * Method to create an author
    * @return Illuminate\Http\Response
    */
    public function show($book)
    {
        return $this->successResponse(
            $this->bookService->getOne($book)
        );
    }

    /*
    * Method to return list of books
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $book)
    {
        return $this->successResponse(
            $this->bookService->edit(
                $request->all(),
                $book
            )
        );
    }

    /*
    * Method to return list of books
    * @return Illuminate\Http\Response
    */
    public function destroy($book)
    {
        return $this->successResponse(
            $this->bookService->delete($book)
        );
    }
}
