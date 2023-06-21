<?php

namespace BLL;
use DAL\dalFuncionario;
include_once '../../DAL/dalFuncionario.php';

class bllFuncionario {

    public function Select (){
        $dal = new  \Dal\dalFuncionario(); 
       
        return $dal->Select();
    }

    public function SelectID (int $id){
        
        $dal = new  \Dal\dalFuncionario(); 
       
        return $dal->SelectID($id);
    }

    public function Insert (\MODEL\Funcionario $funcionario){

       $dal = new \DAL\dalFuncionario(); 

       $dal->Insert($funcionario);
      
    }

    public function Update (\MODEL\Funcionario $funcionario){

       $dal = new \DAL\dalFuncionario(); 

       $dal->Update($funcionario);
      
    }

    public function Delete (int $id){

        $dal = new \DAL\dalFuncionario(); 

        $dal->Delete($id);
       
     }
}
?>