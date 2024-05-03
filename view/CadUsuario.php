<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="login"> login: <label>
         <input type="text" name="login" id="login"><br/>
         <label for="senha"> senha: <label> 
            <input type="password" name="senha1" id="senha1"><br/>
        <label> confirmação de senha</label>
        <input type="password" name="senha2" id="senha2"><br/>
        <label> tipo de permissao:<label>  
            <select name="permissao" id="permissao">
                <option value="0">**SELECIONE**</option>
                <option value="A">**administrador**</option>
                <option value="C">**comum**</option>
</select> <br/>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
</form>

<?php
if(isset($_POST['btnSalvar'])){
     require_once '../controller/UsuarioController.php';
     call_user_func(aray('UsuarioController','salvar'));
}
?>
</body>
</html>