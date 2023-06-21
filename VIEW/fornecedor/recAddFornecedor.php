

<?php
    include_once '../../MODEL/Fornecedor.php';
    include_once '../../BLL/bllFornecedor.php';

   $fornecedor = new \MODEL\Fornecedor(); 
   
   $fornecedor->setNome($_POST['txtNome']);
   $fornecedor->setTelefone($_POST['txtTelefone']);
   $fornecedor->setEndereco($_POST['txtEndereco']);
   $fornecedor->setCnpj($_POST['txtCnpj']);

   $bll = new \BLL\bllFornecedor(); 
   $bll->Insert($fornecedor); 
   
   header("location: lsFornecedor.php");
  
?>