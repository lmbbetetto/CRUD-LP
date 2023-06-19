<?php
    include_once '../../BLL/bllCategoria.php';

    $id = $_GET['id']; 
   
   $bll = new \BLL\bllCategoria(); 
   $bll->Delete($id); 
   
   header("location: lsCategoria.php");
  
?>