<?php
namespace app3\Controllers;

use app3\Models\Model;

class Controller
{
    protected $model;

    public function __construct(Model $model) {

        $this->model = $model;
    }
}
