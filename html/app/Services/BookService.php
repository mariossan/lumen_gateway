<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    /*
    * Method to
    */
    public function __construct()
    {
        // $this->baseUri = config("services.books.base_uri");
        $this->baseUri = env("BOOKS_SERVICE_BASE_URL");
    }

    /**
     * Obtain the full list of author from the author service
     * @return string
     */
    public function getAll()
    {
        return $this->perfomRequest("GET", "/books");
    }

    /**
     * Create one author using the author service
     * @return string
     */
    public function create($data)
    {
        return $this->perfomRequest("POST", "/books", $data);
    }

    public function getOne($book)
    {
        return $this->perfomRequest("GET", "/books/{$book}");
    }

    public function edit($data, $book)
    {
        return $this->perfomRequest("PUT", "/books/{$book}", $data);
    }

    public function delete($book)
    {
        return $this->perfomRequest("DELETE", "/books/{$book}");
    }
}
