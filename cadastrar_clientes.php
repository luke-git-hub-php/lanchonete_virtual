<?php
$conecta=mysqli_connect('localhost','root','','lanchonete');
	$nome = $_POST['nome'];
	$email= $_POST['email'];
	$tel=$_POST['tel'];
	$data= $_POST['data'];
	$senha= $_POST['senha'];
	
$dominio_email=explode("@",$email);
$validar=checkdnsrr($dominio_email[0],"ANY");
if($validar){
	echo "Endereço de E-mail não existe!";
}
?>
<?php
  
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      
  }else{
  	require("cadastro_clientes.php");
  	echo "<script language='javascript' type='text/javascript'>
 	  alert('E-MAIL INVÁLIDO!');window.location.href='cadastro_clientes.php';
 	</script>";
  }
?> <?php
	$query_select="SELECT email FROM cadastro_clientes WHERE email='$email'";
$select=mysqli_query($conecta,$query_select);
$array=mysqli_fetch_array($select);
$logarray=$array['email'];
 if($email=="" || $email==null){
 echo "<script language='javascript' type='text/javascript'>
 	  alert('O campo email deve ser preenchido');window.location.href='cadastro_clientes.php';
 	</script>";
}else{
	if($logarray==$email){
		echo "<script language='javascript' type='text/javascript'>
 	  alert('Esse email já existe');window.location.href='cadastro_clientes.php';
 	</script>";
 	die();	
}else{
	 $query="INSERT INTO cadastro_clientes (id_clientes,nome,email,telefone,data,senha) VALUES ('','$nome','$email','$tel','$data','$senha')";
     $insert=mysqli_query($conecta,$query);
		 if($insert){
		  echo "<script language='javascript' type='text/javascript'>
 	  alert('Cadastro realizado com sucesso!');window.location.href='login_clientes.php';
 	</script>";	
	}else{
	echo "<script language='javascript' type='text/javascript'>
 	  alert('Não foi possível cadastrar esse usuário!');window.location.href='cadastro_clientes.php';
 	</script>";	
	}
	}
  }mysqli_close($conecta);
		?>
		