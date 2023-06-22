<?php
    include_once '../../BLL/bllFuncionario.php';

    $id = $_GET['id']; 
   
   $bll = new \BLL\bllFuncionario(); 
   $bll->Delete($id); 
   
   header("location: lsFuncionario.php");
  
?>