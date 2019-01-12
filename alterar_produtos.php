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
<?php
$conecta=mysqli_connect("localhost","root","","lanchonete")or print(mysqli_error($conecta));
$nome_prod=$_POST['nome_prod'];
$preco=$_POST['preco'];
$id_categoria=$_POST['id_categoria'];
$id=$_POST['id_produtos'];
  //QUERY DE ATUALIZAÇÃO(update)
$resultado=mysqli_query($conecta,"UPDATE produtos SET nome_prod='$nome_prod',preco='$preco',id_categoria='$id_categoria' WHERE id_produtos='$id'");
mysqli_close($conecta);
//redireciona para a página de manutenção de dados
 echo "<script language='javascript' type='text/javascript'>
 	  alert('PRODUTO ALTERADO COM SUCESSO');window.location.href='painel.php';
 	</script>";
?>
</div>
<?php include('rodape_index.php');?>
</body>
</html>