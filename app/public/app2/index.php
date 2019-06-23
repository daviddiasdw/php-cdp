<?php
namespace app2;

include "./Requests/Request.php";
include "./Models/LegalPerson.php";
include "./Controllers/LegalPersonController.php";

use Controllers\LegalPersonController;
use Requests\Request;

$request = new Request();
$legalConttroller = new LegalPersonController();

$result = $legalConttroller->store($request);

echo json_encode($result);
