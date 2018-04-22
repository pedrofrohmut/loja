<?php
class Rotas {
  static function getPagina() {
    if (!isset($_GET["pagina"])) {
      echo "Página não definida";
      include "erro.php";
      return;
    }

    $paginaStr = $_GET["pagina"];
    // print_r($paginaStr);
    // echo "<br />";

    $paginaParams = explode("/", $paginaStr);
    // print_r($paginaParams);

    $paginaFilePath =
      Config::PASTA_CONTROLLER . "/" . $paginaParams[0] . ".php";

    if(!file_exists($paginaFilePath)) {
      echo "Arquivo não encontrado";
      include "erro.php";
      return;
    }

    include $paginaFilePath;
  }
  static function getSiteHome() {
    return Config::SITE_URL . "/" . Config::SITE_PASTA;
  }
  static function getSiteRoot() {
    return $_SERVER["DOCUMENT_ROOT"] . "/" . Config::SITE_PASTA;
  }
  static function getSiteTema() {
    // return self::getSiteHome() . "/" . Config::PASTA_VIEW . "/" . Config::PASTA_TEMA;
    return "view/tema";
  }
  static function getPaginaCarrinho() {
    return self::getSiteHome() . "/carrinho";
  }
}
