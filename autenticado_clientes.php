<?php
$conexao=mysqli_connect("localhost","root","","lanchonete")or die(mysqli_error());
?>
<html>
<head>
	<title>Autenticando usuário</title>
	<script type="text/javascript">
	    function loginsuccessfully(){
	    	setTimeout("window.location='cardapio.php'",5000);
	    }
	   function loginfailed() {
            setTimeout("window.location='login_clientes.php'",5000);
	   }
	</script>
	<style type="text/css">
#autenticando{
	margin:100px 50px 95px 30px;
	background:#e9e9e9;
}
	</style>
</head>
<body>
<?php include('header_index.php');?>
<div id="autenticando">
<?php
$email=$_POST['login'];
$senha=$_POST['senha'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      
  }else{
  	
  	echo "<script language='javascript' type='text/javascript'>
 	  alert('E-MAIL INVÁLIDO!');window.location.href='login_clientes.php';
 	</script>";
  }
$sql=mysqli_query($conexao,"SELECT * FROM cadastro_clientes WHERE email='$email' and senha='$senha'")or die(mysqli_error());
$linha=mysqli_num_rows($sql);
if($linha > 0){
  session_start();
  $_SESSION['login']=$_POST['login'];
  $_SESSION['senha']=$_POST['senha'];

  echo "<i><center><b><h1>Você foi autenticado com sucesso! Aguarde um instante.</h1></b></center></i>";
  echo "<script>loginsuccessfully()</script>";
  $arquivo=fopen('email.txt','a');
  $date=date("d/m/Y");
  fwrite($arquivo,"notificação:Você fez login!|Data e Hora:.$date|Nome:Lucas|De:Lanchonete lanche rápido.");
}else{
	echo "<i><center><b><h1>Nome do usuário ou senha inválidos! Aguade um instante para tentar novamente.</h1></b></center></i>";
	echo "<script>loginfailed()</script>";
}
?>
</div>
<?php include('rodape_index.php');?>
</body>
</html>