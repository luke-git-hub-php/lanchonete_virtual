<?php
$conexao=mysqli_connect("localhost","root","","lanchonete2")or die(mysqli_error());
?>
<html>
<head>
	<title>Autenticando usuário</title>
	<script type="text/javascript">
	    function loginsuccessfully(){
	    	setTimeout("window.location='painel.php'",5000);
	    }
	   function loginfailed() {
            setTimeout("window.location='login_area_restrita.php'",5000);
	   }
	</script>
	<style type="text/css">
	body{
		background:#e9e9e9;
	}
#autenticando{
	margin:100px 50px 95px 30px;
	background:#e9e9e9;
}
	</style>
	<?php include('header_index.php');?>
</head>
<body>
<div id="autenticando">
<?php
$email=$_POST['email'];
$senha=$_POST['senha'];

  
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      
  }else{
  	
  	echo "<script language='javascript' type='text/javascript'>
 	  alert('E-MAIL INVÁLIDO!');window.location.href='login_area_restrita.php';
 	</script>";
  }

$sql=mysqli_query($conexao,"SELECT * FROM cadastro_adm WHERE email='$email' and senha='$senha'")or die(mysqli_error());
$linha=mysqli_num_rows($sql);
if($linha > 0){
  session_start();
  $_SESSION['email']=$_POST['email'];
  $_SESSION['senha']=$_POST['senha'];
  echo "<i><center><b><h1>Você foi autenticado com sucesso! Aguarde um instante.</h1></b></center></i>";  echo "<script>loginsuccessfully()</script>";
}else{
	echo "<center><h1><b>Nome do usuário ou senha inválidos! Aguade um instante para tentar novamente.</h1></b></center>";
	echo "<script>loginfailed()</script>";
}
?>
</div>
<br><br><br><br>
<?php include('rodape_index.php');?>
</body>
</html>