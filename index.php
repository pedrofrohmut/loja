<?php
require_once "./lib/autoload.php";

$smarty = new Template();

Rotas::getPagina();

# Valores para o template
$smarty->assign('nome', 'HUGA BUGA');
$smarty->assign("siteHome", Rotas::getSiteHome());
$smarty->assign("siteRoot", Rotas::getSiteRoot());
$smarty->assign("paginaCarrinho", Rotas::getPaginaCarrinho());

$smarty->assign("siteTema", Rotas::getSiteTema());

# Mostra o template index da pasta defina por setTemplateDir(<dir_path>)
$smarty->display("index.tpl");
?>
