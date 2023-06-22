<?php

namespace BLL;
use DAL\dalProduto;
include_once '../../DAL/dalProduto.php';

class bllProduto {

    public function Select (){
        $dal = new  \Dal\dalProduto(); 
       
        return $dal->Select();
    }

    public function SelectID (int $id){
        
        $dal = new  \Dal\dalProduto(); 
       
        return $dal->SelectID($id);
    }

    public function SelectNome(string $nome){
        $dalProduto = new dalProduto(); 
        return $dalProduto->SelectNome($nome);  
    }

    public function Insert (\MODEL\Produto $produto){

       $dal = new \DAL\dalProduto(); 

       $dal->Insert($produto);
      
    }

    public function Update (\MODEL\Produto $produto){

       $dal = new \DAL\dalProduto(); 

       $dal->Update($produto);
      
    }

    public function Delete (int $id){

        $dal = new \DAL\dalProduto(); 

        $dal->Delete($id);
       
     }
}
?>