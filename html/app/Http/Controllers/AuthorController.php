<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

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
    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    }

    /*
    * Method to create an author
    * @return Illuminate\Http\Response
    */
    public function show($author)
    {
    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $author)
    {
    }

    /*
    * Method to return list of authors
    * @return Illuminate\Http\Response
    */
    public function destroy($author)
    {
    }
}
