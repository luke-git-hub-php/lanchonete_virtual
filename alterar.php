<html>
<head>
  <title></title>
  <style type="text/css">
  body{
    background:#e9e9e9;
  }
#d{
  margin:100px 50px 95px 30px;
  background:#e9e9e9;
}
  </style>
</head>
<body>
<?php include('header_index.php');?>
<div id="d">
<form name="form_alterar" method="POST" action="alterar_produtos.php">
<?php
$conecta=mysqli_connect("localhost","root","","lanchonete2")
  or print(mysqli_error($conecta));
  $idAlt=$_GET['id'];
 $resultado=mysqli_query($conecta,"SELECT * FROM produtos where id_produtos='$idAlt'");
 if($resultado){
    while($row=mysqli_fetch_assoc($resultado)){
    ?>	
    <a>ID</a>
    <input readonly="true" type="text" id="id_produtos" name="id_produtos" value="<?php echo $row['id_produtos']; ?>" />
    <p></p>
    <a>Nome do Produto:</a>
    <input type="text" id="nome_prod" name="nome_prod" value="<?php echo $row['nome_prod']; ?>" size="3     0" />
    <a>Preço:</a>
    <input type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>" size="25"/>
    <a>ID da Categoria:</a>
    <input type="text" id="id_categoria" name="id_categoria" value="<?php echo $row['id_categoria'];?>" size="20"/>
    <?php
    }
 }
?>
   <input type="submit" name="alterar" value="Alterar" />
</form>
</div>
<?php include('rodape_index.php');?>
</body>
</html>


