<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden"  name="id" id="id" value="<?php echo isset($imovel)?$imovel->getId():'';?>" />
        <label for="descricao"> descricao: <label> 
         <input type="text" name="descricao" id="descricao"><br/>
         <label for="foto"> foto: <label> 
        <input type="password" name="foto1" id="foto1"><br/>
        <label> confirmação de foto</label>
        <input type="password" name="foto2" id="foto2"><br/>
        <label> tipo de valor:<label> 
        <input type="text" class="form-control col-sm-8" name="descricao" id="descricao" value="<?php echo isset($imovel)?$imovel->getdescricao():'';?>" />
        <input type="password" class="form-control col-sm-8" name="foto" id="foto" value="<?php echo isset($imovel)?$imovel->getDescricao():'';?>" />
            <select name="valor" id="valor">
                <option value="0">**SELECIONE**</option>
                <option value="A"<?php echo isset($imovel) && $imovel->getvalor()=='A'?'selected':'' ?>>**administrador**</option>
                <option value="C"<?php echo isset($imovel) && $imovel->getvalor()=='C'?'selected':'' ?>>**comum**</option>
</select> <br/>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar" >
</form>

<?php
if(isset($_POST['btnSalvar'])){
     require_once 'controller/imovelController.php';
     call_user_func(array('imovelController','salvar'));
     header('Location: index.php?action=listar');
}
?>
</body>
</html>