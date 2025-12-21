<?php

$path_variables = explode("/", $_SERVER["REQUEST_URI"]);
array_shift($path_variables);

include_once "lang.php";

$path = array_shift($path_variables);

switch ($path) {
  case "payment-confirmed":
    include_once "payment-confirmed.php";
    break;
  default:
    include_once "./landing-page.php";
    break;
}
