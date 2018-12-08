<?php

namespace App;

class Example
{
    protected $foo;
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
