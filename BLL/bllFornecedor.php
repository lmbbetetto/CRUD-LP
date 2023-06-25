<?php

namespace BLL;
use DAL\dalFornecedor;
include_once '../../DAL/dalFornecedor.php';

class bllFornecedor {

    public function Select (){
        $dal = new  \DAL\dalFornecedor(); 
       
        return $dal->Select();
    }

    public function SelectID (int $id){
        
        $dal = new  \Dal\dalFornecedor(); 
       
        return $dal->SelectID($id);
    }

    public function SelectNome(string $nome){
        $dalFornecedor = new dalFornecedor(); 
        return $dalFornecedor->SelectNome($nome);
    }

    public function Insert (\MODEL\Fornecedor $fornecedor){

       $dal = new \DAL\dalFornecedor(); 

       $dal->Insert($fornecedor);
      
    }

    public function Update (\MODEL\Fornecedor $fornecedor){

       $dal = new \DAL\dalFornecedor(); 

       $dal->Update($fornecedor);
      
    }

    public function Delete (int $id){

        $dal = new \DAL\dalFornecedor(); 

        $dal->Delete($id);
       
     }
}


?>