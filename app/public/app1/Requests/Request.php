<?php

namespace Requests;

class Request
{

    protected $data;

    public function __construct()
    {
        $this->data = json_decode(file_get_contents('php://input'), true);
    }

    public function all()
    {
        return $this->data;
    }
}
