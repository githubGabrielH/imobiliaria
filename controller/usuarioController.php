<?php

require_once '../model/Usuario.php';

class UsuarioController{
    public static function salvar(){
        $usuario = new Usuario;

        //armazena as informações do $_POST via set
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha']);
        $usuario->setPermissao($_POST['permissao']);

        $usuario->save();
    }

}

?>