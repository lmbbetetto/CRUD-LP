<?php
include_once '../../MODEL/Venda.php';
include_once '../../BLL/bllVenda.php';
include_once '../../BLL/bllProduto.php';

$bllProduto = new BLL\bllProduto;
$produto = $bllProduto->SelectID($_POST['txtIdProduto']);

$venda = new \MODEL\Venda();

$venda->setIdProduto($_POST['txtIdProduto']);
$venda->setIdFuncionario($_POST['txtIdFuncionario']);
$venda->setIdCliente($_POST['txtIdCliente']);
$venda->setQtdeVendida($_POST['txtQtdeVendida']);
$venda->setValorTotal($_POST['txtQtdeVendida'] * ($produto->getValorUnitario()));
$venda->setDataVenda($_POST['txtDataVenda']);

$bll = new \BLL\bllVenda();
$bll->Insert($venda);

header("location: lsVenda.php");
