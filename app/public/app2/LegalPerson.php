<?php
namespace app2;

include "./Requests/Request.php";
include "./Models/LegalPerson.php";
include "./Controllers/LegalPersonController.php";

use Controllers\LegalPersonController;
use Requests\Request;

$request = new Request();
$legalController = new LegalPersonController();

$result = $legalController->store($request);

echo json_encode($result);
