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
<form method="post" action="nova_senha.php">
<div id="c">
        <label id="l2">E-mail:</label>
         <input type="text" name="email" id="input" placeholder="Digite seu email" />
         <br>
           </div>
  <div id="a"><label id="l1">Código de renovação:</label>
            <input type="text" id="input1" name="cod" placeholder="Digite o codigo"/>
            <BR>
          </div>	 
           
       <div id="b">
        <label id="l2">Nova Senha:</label>
         <input type="password" name="senha" id="input2" maxlength="8" placeholder="Digite sua nove senha" />
         <br>
           </div>
      <input type="submit"  value="Alterar" id="botao" name="bt" id="enviar" /><br/>	
</form></div>
<?php include('rodape_index.php');?>
</body>
</html>