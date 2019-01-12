<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
Email:<input type="text" name="email2">
Mensagem:<textarea name="msg2">
</textarea>
<input type="submit" name="acao" value="Enviar">
</form>
<?php
if(isset($_POST['acao']) && $_POST['acao']=='Enviar'){ $email=$_POST['email2'];
      $msg=$_POST['msg2'];
if(!empty($email) && !empty($msg2)){
      $msg=wordwrap($msg,70,"<br>",true);
      $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:Lucas testes <'.$email.'>' . "\r\n";
      mail('lucasvieiradasilvajw@gmail.com', 'Mensagem teste',$msg,$headers);
  }else{
     print("Preencha todos os campos!");
  }
}
?>
</body>
</html>