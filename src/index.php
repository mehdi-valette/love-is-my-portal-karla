<?php
$domain = "main";
$lang = "";
$locale = "";
bindtextdomain($domain, realpath("./") . DIRECTORY_SEPARATOR . "locale");
textdomain($domain);

$pathVariables = explode("/", $_SERVER["REQUEST_URI"]);

foreach ($pathVariables as $variable) {
  $locale = match ($variable) {
    "fr" => "fr_FR.utf8",
    "pt" => "pt_PT.utf8",
    default => "",
  };

  if ($locale !== "") {
    $lang = $variable;
    break;
  }
}

if ($locale == "") {
  include_once "./language-choice.php";
  exit();
}

if (!setlocale(LC_ALL, $locale)) {
  throw new Exception(message: "Locale not supported " . $locale);
}

include_once "./landing-page.php";
