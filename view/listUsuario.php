<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Usuarios</h1>
<hr>
<div>
    <table style="top:40px;">
    <thead>
        <tr>
            <th> login </th>
            <th> permissão </th>
            <th> <a href="CadUsuario"> Novo</a> </th>
        </tr>  
    </thead> 
    <tbody>
        <?php
    require_once "controller/UsuarioController.php";
    $usuarios = call_user_func(array("UsuarioController", "listar"));

    if(isset($usuarios) && !empty($usuario)){
        foreach ($usuarios as $usuario){

        
    
        ?>

        <tr>
            <td> <?php echo $usuario->getLogin(); ?></td>
            <td> <?php echo $usuario->getPermissao(); ?></td>
            <td> 
                <a href="index.php?action=editar&id=<?php echo $usuario->getId();?>"> Editar  </a>
                <a href="index.php?action=editar&id=<?php echo $usuario->getId();?>>"> Excluir  </a>
            </td>
        </tr>     

        <?php

        }
    }else {
    ?>
    <tr> 
        <td colspan="3">Nenhum registro enconrado</td>
    </tr>

    <?php
}
?> 

</body>
</html>


        