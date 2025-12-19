<?php
$domain = "main";
$lang = "";
bindtextdomain($domain, realpath("./") . DIRECTORY_SEPARATOR . "locale");
textdomain($domain);

$pathVariables = explode("/", $_SERVER["REQUEST_URI"]);

foreach ($pathVariables as $variable) {
  $lang = match ($variable) {
    "fr" => "fr_FR.utf8",
    "pt" => "pt_PT.utf8",
    default => "",
  };

  if ($lang !== "") {
    break;
  }
}

if ($lang == "") {
  include_once "./language-choice.php";
  exit();
}

if (!setlocale(LC_ALL, $lang)) {
  throw new Exception(message: "Locale not supported " . $lang);
}

include_once "./landing-page.php";

?>