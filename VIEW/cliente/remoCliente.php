<?php
    include_once '../../BLL/bllCliente.php';

    $id = $_GET['id']; 
   
   $bll = new \BLL\bllCliente(); 
   $bll->Delete($id); 
   
   header("location: lsCliente.php");
  
?>