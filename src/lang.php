<?php

$lang = array_shift($path_variables);

if ($lang === "") {
  include_once "pages/language-choice.php";
  exit();
}

if (!in_array($lang, $lang_accepted)) {
  header("Location: /", true, 301);
  exit();
}

$locale = match ($lang) {
  "fr" => "fr_FR.utf8",
  "pt" => "pt_PT.utf8",
  default => ""
};


if (!setlocale(LC_ALL, $locale)) {
  throw new Exception(message: "Locale not supported $locale");
}
