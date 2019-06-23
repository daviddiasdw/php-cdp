<?php
namespace app3;

include "./Requests/Request.php";
include "./Models/Address.php";
include "./Controllers/AddressController.php";

use app3\Controllers\AddressController;
use app3\Requests\Request;

$request = new Request();
$addressConttroller = new AddressController();

//$result = $addressConttroller->store($request);
$address = $addressConttroller->index();

echo json_encode($address);
