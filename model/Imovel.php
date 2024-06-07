<?php

require_once 'banco.php';
require_once 'conexao.php';

class Imovel extends banco{
    private $id;
    private $descricao;
    private $foto;
    private $valor;
    private $tipo;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
         $this->id = $id;
    }

    
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
         $this->descricao = $descricao;
    }

    
    public function getfoto(){
        return $this->foto;
    }
    public function setfoto($foto){
         $this->foto = $foto;
    }

    
    public function getvalor(){
        return $this->valor;
    }
    public function setvalor($valor){
         $this->valor  = $valor;
    }
    public function gettipo(){
        return $this->tipo;
    }
    public function settipo($tipo){
         $this->tipo  = $tipo;
    }

    public function save(){
        $result = false;

        $conexao = new Conexao();
            if($conn = $conexao->getConection()){
             if($this->id>0){
             $query = "UPTADE usuario set descricao = :descricao, foto = :foto, valor = :valor where id = :id";
                 $stmt = $conn->prepare($query);
        
            if($stmt-> execute(array(':descricao' => $this->descricao,':foto' => $this->foto,':valor' => $this->valor ))){
                $result = $stmt->rowCount();
            }
        }else{
           $query = "insert into usuario (id, descricao, foto, valor) values (null, :descricao,:foto, :valor)";
           $stmt = $conn->prepare($query);
            if ($stmt->execute(array(':descricao' => $this->descricao, ':foto' => $this->foto, ':valor' => $this->valor))) {

            }
        }
     }
    return $result; 
   }
    public function remove($id){

    }

    public function find($id){
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "SELECT * from usuario where id= :id";
        $stmt = $conn->prepare($query);
        if($stmt-> execute(array(':id' => $id))){
            if($stmt->rowCoutn() > 0){
                $result = $stmt->fecthObject(Imovel::class);
            }else{
                $result = false;
            }
            }
            return $result;
        } 
    

    public function count(){

    }
    public function listAll(){
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        
        $query = "SELECT * from usuario";
        $stmt = $conn->prepare($query);
        $result = array();
        if($stmt->execute()){
            while($rs = $stmt->fetchObject(Imovel::class)){
                $result[] = $rs;
            }
        }
        else{
            $result = false;
        }
        
        return $result;
    }
}



?>