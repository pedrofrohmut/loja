<?php
Class Template extends Smarty {
  function __construct() {
    parent::__construct();
    # Mostra Qual a Pasta dos templates
    $this->setTemplateDir("./view/");
    # Define a pasta para os arquivos compilados
    $this->setCompileDir("./view/compile");
    # Define a pasta do cache
    $this->setCacheDir("./view/cache");
  }
}
?>
