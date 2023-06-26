<?php
    include_once '../../BLL/bllVenda.php';

    $id = $_GET['id']; 
   
   $bll = new \BLL\bllVenda(); 
   $bll->Delete($id); 
   
   header("location: lsVenda.php");
  
?>