<?php
require_once "./lib/autoload.php";

$smarty = new Template();

Rotas::getPagina();

# Valores para o template
// $smarty->assign('nome', 'HUGA BUGA');

# Mostra o template index da pasta defina por setTemplateDir(<dir_path>)
// $smarty->display("index.tpl");
?>
