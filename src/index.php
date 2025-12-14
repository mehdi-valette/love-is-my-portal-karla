<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
  $file = fopen('php://stdout', 'w');
  fputs($file, $_SERVER["REQUEST_URI"]);
  fclose($file);

  return false; // serve the resource as-is
}

$version = str_replace("/", "", $_SERVER["REQUEST_URI"]);

switch ($version) {
  case "A":
    require_once "A/index.php";
    break;
  case "B":
    require_once "B/index.php";
    break;
}