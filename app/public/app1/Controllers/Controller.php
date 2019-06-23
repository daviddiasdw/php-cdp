<?php

namespace Controllers;

use Api\Models\Model;

class Controller
{
    protected $model;

    public function __construct(Model $model) {

        $this->model = $model;
    }

}
