<?php
namespace app2;

include "./Requests/Request.php";
include "./Models/NaturalPerson.php";
include "./Controllers/NaturalPersonController.php";

use app2\Controllers\NaturalPersonController;
use app2\Requests\Request;

$request = new Request();
$naturalConttroller = new NaturalPersonController();

$result = $naturalConttroller->store($request);

echo json_encode($result);
