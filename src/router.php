<?php

$path_variables = explode("/", $_SERVER["REQUEST_URI"]);
array_shift($path_variables);

if ($path_variables[0] === "robots.txt") {
  exit();
}

include_once "lang.php";

$path = array_shift($path_variables);

switch ($path) {
  case "payment-confirmed":
    include_once "pages/payment-confirmed.php";
    break;
  case "":
    include_once "pages/landing-page.php";
    break;
  default:
    header("Location: /$lang", true, 301);
    exit();
}
