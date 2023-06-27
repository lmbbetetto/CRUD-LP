<?php
    include_once '../../MODEL/Funcionario.php';
    include_once '../../BLL/bllFuncionario.php';

   $funcionario = new \MODEL\Funcionario(); 
   
   $funcionario->setId($_POST['txtId']);
   $funcionario->setNome($_POST['txtNome']);
   $funcionario->setEmail($_POST['txtEmail']);
   $funcionario->setTelefone($_POST['txtTelefone']);
   $funcionario->setCpf($_POST['txtCpf']);
   $funcionario->setSenha(md5($_POST['txtSenha']));

   $bll = new \BLL\bllFuncionario(); 
   $bll->Update($funcionario); 
   
   header("location: lsFuncionario.php");
  
?>