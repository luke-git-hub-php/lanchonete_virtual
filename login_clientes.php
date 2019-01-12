<html>
<head>
<meta charset="utf-8">
	<title>Login do cliente</title>
	<link rel="stylesheet" type="text/css" href="css/style_login_clientes.css">
	</head>
<body>
<?php include('header_index.php');?>
      <br>
      <div id="d">
      <div id="div1">
    	<form name="form" method="POST" action="autenticado_clientes.php">
    		<div id="a">
           <label id="l1">Login: </label>
            <input type="text" id="input1" name="login" placeholder="Digite seu Email"/>
            <BR>
          </div>	 
           
       <div id="b">
        <label id="l2">Senha: </label>
         <input type="password" name="senha" id="input2" maxlength="8" placeholder="Digite sua senha" />
         <br>
           </div>
      <input type="submit"  value="Fazer Login" id="botao" name="bt" id="enviar" /><br/></br><br/></br><br/>
      <center><button><a href="form_nova_senha.php">esqueceu a senha?</a></button></center>
  	</form>
  	  </div>
            </div>
      <?php include('rodape_index.php');?>
</body>
</html>