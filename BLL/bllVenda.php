<?php

namespace BLL;
use DAL\dalVenda;
include_once '../../DAL/dalVenda.php';

class bllVenda {

    public function Select (){
        $dal = new  \Dal\dalVenda(); 
       
        return $dal->Select();
    }

    public function SelectID (int $id){
        
        $dal = new  \Dal\dalVenda(); 
       
        return $dal->SelectID($id);
    }

    public function SelectDataVenda(string $dataVenda){
        $dal = new dalVenda(); 
        return $dal->SelectDataVenda($dataVenda);  
    }

    public function Insert (\MODEL\Venda $venda){

       $dal = new \DAL\dalVenda(); 

       $dal->Insert($venda);
      
    }

    public function Update (\MODEL\Venda $venda){

       $dal = new \DAL\dalVenda(); 

       $dal->Update($venda);
      
    }

    public function Delete (int $id){

        $dal = new \DAL\dalVenda(); 

        $dal->Delete($id);
       
     }
}
?>