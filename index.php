<?php
require_once "./lib/autoload.php";

$smarty = new Smarty();
# Mostra Qual a Pasta dos templates
$smarty->setTemplateDir("./view/");
# Define a pasta para os arquivos compilados
$smarty->setCompileDir("./view/compile");
# Define a pasta do cache
$smarty->setCacheDir("./view/cache");

# Valores para o template
$smarty->assign('nome', 'HUGA BUGA');

# Mostra o template index da pasta defina por setTemplateDir(<dir_path>)
$smarty->display("index.tpl");
?>
