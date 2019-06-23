<?php
namespace app2\Controllers;

include "Controller.php";

use app2\Requests\Request;
use app2\Models\NaturalPerson;

class NaturalPersonController extends Controller
{
    public function __construct()
    {
        $model = new NaturalPerson();
        parent::__construct($model);
    }

    public function store(Request $request)
    {

        return $this->model->store($request->all());
    }
}
