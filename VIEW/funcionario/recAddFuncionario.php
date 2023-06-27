<?php
    include_once '../../MODEL/Funcionario.php';
    include_once '../../BLL/bllFuncionario.php';

   $funcionario = new \MODEL\Funcionario(); 
   
   $funcionario->setNome($_POST['txtNome']);
   $funcionario->setSenha(md5($_POST['txtSenha']));
   $funcionario->setEmail($_POST['txtEmail']);
   $funcionario->setTelefone($_POST['txtTelefone']);
   $funcionario->setCpf($_POST['txtCpf']);

   $bll = new \BLL\bllFuncionario(); 
   $bll->Insert($funcionario); 
   
   header("location: lsFuncionario.php");
  
?>