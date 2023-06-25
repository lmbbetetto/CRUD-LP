<?php
    include_once '../../MODEL/Cliente.php';
    include_once '../../BLL/bllCliente.php';

   $cliente = new \MODEL\Cliente(); 
   
   $cliente->setId($_POST['txtId']);
   $cliente->setNome($_POST['txtNome']);
   $cliente->setTelefone($_POST['txtTelefone']);
   $cliente->setCpf($_POST['txtCpf']);
  

   $bll = new \BLL\bllCliente(); 
   $bll->Update($cliente); 
   
   header("location: lsCliente.php");
  
?>