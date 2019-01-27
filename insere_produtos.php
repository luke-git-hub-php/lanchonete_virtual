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
<?php
$conecta=mysqli_connect("localhost","root","","lanchonete2");
 
  if(isset($_POST['nome_prod'])){
//Campos recebidos pelo formulário
$fild_nome=$_POST['nome_prod'];
$preco=$_POST['preco'];
$id_categoria=$_POST['id_categoria'];
//Enviar uma query
mysqli_query($conecta,"INSERT INTO produtos (nome_prod,preco,id_categoria)  VALUES ('$fild_nome','$preco','$id_categoria')");

mysqli_close($conecta);
//Após a inserção retornar a página cadastro.php
}
echo "<script language='javascript' type='text/javascript'>
 	  alert('PRODUTO CADASTRADO COM SUCESSO');window.location.href='painel.php';
 	</script>";?>
 	<?php include('rodape_index.php');?>

</body>
</html>