<?php
namespace Controllers;

include "Controller.php";

use Requests\Request;
use app2\Models\LegalPerson;

class LegalPersonController extends Controller
{
    public function __construct()
    {
        $model = new LegalPerson();
        parent::__construct($model);
    }

    public function store(Request $request)
    {

        return $this->model->store($request->all());
    }
}
