<?php
namespace app2\Controllers;

use app2\Models\Model;

class Controller
{
    protected $model;

    public function __construct(Model $model) {

        $this->model = $model;
    }
}
