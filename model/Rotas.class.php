<?php
class Rotas {
  static function getPagina() {
  //   if (isset($_GET["pagina"])) {
  //     $pagina = "{$_GET["pagina"]}.php";
  //     if (file_exists($pagina)) {
  //       include $pagina;
  //     } else {
  //       include "erro.php";
  //     }
  //   }
  // }
    if (!isset($_GET["pagina"])) {
      include "erro.php";
      return;
    }

    $pagina = "controller/{$_GET["pagina"]}.php";
    if(!file_exists($pagina)) {
      include "erro.php";
      return;
    }

    include $pagina;
  }
}
