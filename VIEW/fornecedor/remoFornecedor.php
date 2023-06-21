<?php
    include_once '../../BLL/bllFornecedor.php';

    $id = $_GET['id']; 
   
   $bll = new \BLL\bllFornecedor(); 
   $bll->Delete($id); 
   
   header("location: lsFornecedor.php");
  
?>