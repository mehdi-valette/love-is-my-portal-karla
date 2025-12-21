<?php

$lang = array_shift($path_variables);

$locale = match ($lang) {
  "fr" => "fr_FR.utf8",
  "pt" => "pt_PT.utf8",
  default => ""
};

if ($locale === "") {
  include_once "./language-choice.php";
  exit();
}

if (!setlocale(LC_ALL, $locale)) {
  throw new Exception(message: "Locale not supported $locale");
}