<?php
require_once "controllers/controller.php";
require_once "controllers/registrosController.php";
require_once "controllers/lecturaController.php";
require_once "controllers/EditarController.php";
require_once "models/crud.php";
require_once "models/model.php";


$mvc= new MvcController();
$mvc -> plantilla();

?>