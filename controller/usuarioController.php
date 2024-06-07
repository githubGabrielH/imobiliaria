<?php

require_once 'model/usuario.php';

class UsuarioController{
    public static function salvar(){
        $usuario = new Usuario;

        //armazena as informações do $_POST via set
        $usuario->setId($_POST['id']);
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha1']);
        $usuario->setPermissao($_POST['permissao']);

        $usuario->save();
    }

    public static function listar(){
        //cria um objeto do tipo usuario 
        $usuario = new Usuario;

        return $usuario->listAll();
    }
    public static function editar($id){
       
        $usuario = new Usuario;
        $usuario = $usuario->find($id);

        return $usuario;
    }
    public static function eexcluir($id){
       
        $usuario = new Usuario;
        $usuario = $usuario->remove($id);

      
    }
}
?>
