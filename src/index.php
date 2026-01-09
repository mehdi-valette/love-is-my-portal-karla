<?php
include_once "conf.php";

$lang_accepted = ["fr", "pt"];
$domain = "main";
bindtextdomain($domain, realpath("./") . DIRECTORY_SEPARATOR . "locale");
textdomain($domain);

try {
  $conf = new Conf();
  include_once "router.php";
} catch (Exception $e) {
  file_put_contents("php://stderr", $e);
  include_once "error.php";
  exit();
}