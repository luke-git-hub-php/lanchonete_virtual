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
}</style>
</head>
<body>
<?php include('header_index.php');?>
<div id="d">
<?php
$email=$_POST['email'];
$cod=$_POST['cod'];
$senha=$_POST['senha'];
  if(isset($_POST['cod']) == "00123ww" && isset($_POST['email'])){
     $conecta=mysqli_connect('localhost','root','','lanchonete');
     $resultado=mysqli_query($conecta,"UPDATE cadastro_clientes SET senha='$senha' WHERE email='$email'");}
     if($resultado){
 echo "<script language='javascript' type='text/javascript'>
 	  alert('SENHA ALTERADO COM SUCESSO!');window.location.href='login_clientes.php';
 	</script>";
  }else{
  	echo "<script language='javascript' type='text/javascript'>
 	  alert('ERROR!');window.location.href='form_nova_senha.php';
 	</script>";
  }mysqli_close($conecta);
?></div>
<?php include('rodape_index.php');?>
</body>
</html>
