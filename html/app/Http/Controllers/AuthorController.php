<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function index()
    {
        return $this->successResponse(
            $this->authorService->obtainAuthors()
        );

    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        return $this->successResponse(
            $this->authorService->createAuthor(
                $request->all(),
                Response::HTTP_CREATED
            )
        );
    }

    /*
    * Method to create an author
    * @return Illuminate\Http\Response
    */
    public function show($author)
    {
        return $this->successResponse(
            $this->authorService->getAuthor($author)
        );
    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $author)
    {
        return $this->successResponse(
            $this->authorService->editAuthor(
                $request->all(),
                $author
            )
        );
    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function destroy($author)
    {
        return $this->successResponse(
            $this->authorService->deleteAuthor($author)
        );
    }
}
