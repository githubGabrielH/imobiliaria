<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> imovel</h1>
<hr>
<div>
    <table style="top:40px;">
    <thead>
        <tr>
            <th> descricao </th>
            <th> permissão </th>
            <th> <a href="Cadimovel"> Novo</a> </th>
        </tr>  
    </thead> 
    <tbody>
        <?php
    require_once "controller/imovelController.php";
    $imovel = call_user_func(array("imovelController", "listar"));

    if(isset($imovel) && !empty($imovel)){
        foreach ($imovel as $imovel){

        
    
        ?>

        <tr>
            <td> <?php echo $imovel->getdescricao(); ?></td>
            <td> <?php echo $imovel->getPermissao(); ?></td>
            <td> 
                <a href="index.php?action=editar&id=<?php echo $imovel->getId();?>"> Editar  </a>
                <a href="index.php?action=editar&id=<?php echo $imovel->getId();?>>"> Excluir  </a>
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


        