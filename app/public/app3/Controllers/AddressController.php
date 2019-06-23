<?php
namespace app3\Controllers;

include "Controller.php";

use app3\Requests\Request;
use app3\Models\Address;

class AddressController extends Controller
{
    public function __construct()
    {
        $model = new Address();
        parent::__construct($model);
    }

    public function index()
    {
        return $this->model->index();
    }

    public function store(Request $request)
    {

        return $this->model->store($request->all());
    }
}
