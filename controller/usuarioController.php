<?php

require_once '../model/Usuario.php';

class UsuarioController{
    public static function salvar(){
        $usuario = new Usuario;

        //armazena as informações do $_POST via set
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
}
?>
