<?php
namespace Api;

$actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

echo $actual_link;
die();

//include "./Requests/Request.php";
//include "./Controllers/CasaController.php";
//include "./Models/Casa.php";

//use Requests\Request;
//use Controllers\CasaController;

//$_POST = [ 'qtdSalas' => 2, 'qtdQuartos' => 3, 'qtdCozinhas' => 1, 'qtdBanheiros' => 3 ];

//$request = new Request();
//$casaController = new CasaController();
//
//$result = $casaController->store($request);

//echo json_encode($result);
