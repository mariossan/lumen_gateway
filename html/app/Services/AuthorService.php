<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    /*
    * Method to
    */
    public function __construct()
    {
        $this->baseUri = env("AUTHORS_SERVICE_BASE_URL");
    }

    /**
     * Obtain the full list of author from the author service
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->perfomRequest("GET", "/authors");
    }

    /**
     * Create one author using the author service
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->perfomRequest("POST", "/authors", $data);
    }

    public function getAuthor($author)
    {
        return $this->perfomRequest("GET", "/authors/{$author}");
    }

    public function editAuthor($data, $author)
    {
        return $this->perfomRequest("PUT", "/authors/{$author}", $data);
    }

    public function deleteAuthor($author)
    {
        return $this->perfomRequest("DELETE", "/authors/{$author}");
    }
}
