<?php
    include_once '../../MODEL/Produto.php';
    include_once '../../BLL/bllProduto.php';

   $produto = new \MODEL\Produto(); 
   
   $produto->setNome($_POST['txtNome']);
   $produto->setIdCategoria($_POST['txtIdCategoria']);
   $produto->setIdFornecedor($_POST['txtIdFornecedor']);
   $produto->setQtdeEstoque($_POST['txtQtdeEstoque']);
   $produto->setValorUnitario($_POST['txtValorUnitario']);

   $bll = new \BLL\bllProduto(); 
   $bll->Insert($produto); 
   
   header("location: lsProduto.php");
  
?>