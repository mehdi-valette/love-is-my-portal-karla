<?php

class Conf
{
  private $paymentLinkFr;
  private $paymentLinkPt;

  private $conf_path = "/etc/karla.conf";
  private $conf_key_payment_link_fr = "payment_link_fr";
  private $conf_key_payment_link_pt = "payment_link_pt";

  public function __construct()
  {
    $conf = parse_ini_file($this->conf_path);

    if ($conf === false) {
      throw new Exception("configuration file not found or not parsable: " . $this->conf_path);
    }

    $this->verify_keys_exist($conf);

    $this->paymentLinkFr = $conf[$this->conf_key_payment_link_fr];
    $this->paymentLinkPt = $conf[$this->conf_key_payment_link_pt];
  }

  private function verify_keys_exist(array $conf)
  {
    $expected_keys = [$this->conf_key_payment_link_fr, $this->conf_key_payment_link_pt];

    foreach ($expected_keys as $key) {
      if (!array_key_exists($key, $conf)) {
        throw new Exception("cannot find key \"" . $key . "\" in configuration file: " . $this->conf_path);
      }
    }
  }

  public function get_payment_link(string $lang)
  {
    $link = match ($lang) {
      "fr" => $this->paymentLinkFr,
      "pt" => $this->paymentLinkPt,
      default => ""
    };

    return $link;
  }
}