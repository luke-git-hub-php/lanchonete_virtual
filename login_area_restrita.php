
<html>
<head>
	<title>Aréa Restrita</title>
	<link rel="stylesheet" type="text/css" href="css/style_login_adm.css">
	</head>
<body>
<?php include('header_index.php');?>
<br><br>
<div id="d">
<div id="p">Faça seu Login</div>
    <br>
    <div id="div1">
  	<form name="form" method="POST"action="autenticado_usuario.php">
  		<div id="a">
         <label id="l1">E-mail</label>
          <input type="text" id="input1" name="email" placeholder="Digite seu login"/>
          <br>
        </div>	 
         
     <div id="b">
      <label id="l2">Senha : </label>
       <input type="password" name="senha" id="input2" placeholder="Digite sua senha" />
       <br>
         </div>
    <input type="submit"  value="Fazer Login" id="botao" name="bt" id="enviar" />
	</form>
	  </div></div>
	   <?php include('rodape_index.php');?>
</body>
</html>