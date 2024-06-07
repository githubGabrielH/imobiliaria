<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden"  name="id" id="id" value="<?php echo isset($usuario)?$usuario->getId():'';?>" />
        <label for="login"> login: <label> 
         <input type="text" name="login" id="login"><br/>
         <label for="senha"> senha: <label> 
        <input type="password" name="senha1" id="senha1"><br/>
        <label> confirmação de senha</label>
        <input type="password" name="senha2" id="senha2"><br/>
        <label> tipo de permissao:<label> 
        <input type="text" class="form-control col-sm-8" name="login" id="login" value="<?php echo isset($usuario)?$usuario->getLogin():'';?>" />
        <input type="password" class="form-control col-sm-8" name="senha1" id="senha1" value="<?php echo isset($usuario)?$usuario->getSenha():'';?>" />
            <select name="permissao" id="permissao">
                <option value="0">**SELECIONE**</option>
                <option value="A"<?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':'' ?>>**administrador**</option>
                <option value="C"<?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected':'' ?>>**comum**</option>
</select> <br/>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar" >
</form>

<?php
if(isset($_POST['btnSalvar'])){
     require_once 'controller/UsuarioController.php';
     call_user_func(array('UsuarioController','salvar'));
     header('Location: index.php?action=listar');
}
?>
</body>
</html>