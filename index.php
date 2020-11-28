<?php

require './lib/autoload.php';

$smarty = new Template();



//valor para o template
//$smarty->assign('NOME','Manoel Araujo');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_ATENDIMENTO', Rotas::pag_Atendimento());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

//$dados = new Conexao();
//$sql = "SELECT * FROM categorias";
//$dados->ExecuteSQL($sql);
//echo $dados->TotalDados();
//echo $dados->GetItens();
//$lista = $dados->ListarDados($sql);

$smarty->display('index.tpl');
?>