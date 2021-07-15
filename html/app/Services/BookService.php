<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
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
        $this->baseUri = config("services.books.base_uri");
    }
}
