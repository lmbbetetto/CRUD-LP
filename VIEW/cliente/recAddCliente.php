

<?php
    include_once '../../MODEL/Cliente.php';
    include_once '../../BLL/bllCliente.php';

   $cliente = new \MODEL\Cliente(); 
   

   $cliente->setNome($_POST['txtNome']);
   $cliente->setTelefone($_POST['txtTelefone']);
   $cliente->setCpf($_POST['txtCpf']);
 

   $bll = new \BLL\bllCliente(); 
   $bll->Insert($cliente); 
   
   header("location: lsCliente.php");
  
?>