<?php

namespace Controllers;

include "Controller.php";

use Api\Models\Casa;
use Requests\Request;


class CasaController extends Controller
{
    public function __construct()
    {
        $model = new Casa();
        parent::__construct($model);
    }

    public function index()
    {

    }

    public function store(Request $request)
    {

        return $this->model->store($request->all());
    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
