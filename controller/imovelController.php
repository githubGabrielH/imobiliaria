<?php

require_once 'model/imovel.php';

class ImovelController{
    public static function salvar(){
        $imovel = new Imovel;

        //armazena as informações do $_POST via set
        $imovel->setId($_POST['id']);
        $imovel->setDescricao($_POST['ldescricao']);
        $imovel->setFoto($_POST['foto']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['valor']);

        $imovel->save();
    }

    public static function listar(){
        //cria um objeto do tipo imovel 
        $imovel = new Imovel;

        return $imovel->listAll();
    }
    public static function editar($id){
       
        $imovel = new Imovel;
        $imovel = $imovel->find($id);

        return $imovel;
    }
    public static function eexcluir($id){
       
        $imovel = new Imovel;
        $imovel = $imovel->remove($id);

      
    }
}
?>
