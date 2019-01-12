<html>
<head>
	<title>recendo pedidos</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	body{
		background: #e9e9e9;
	}
	#div{
		margin:100px 50px 25px 50px;
		background-color:#e8c379;
		color:black;
		width:600px;
		text-align: center;
	 text-transform:capitalize;
	 font-style:italic;
	 font-weight:bold;
	 font-size:30px;
	}

	</style>
</head>
<body>
<?php include('header_index.php');?>
<center>
<div id="div">
<center>
<table border="5" id="table">
<tr><th>Nome | Preço </th></tr>
<tr><td><?php
$lista_pedido=$_POST['escolha'];
foreach($lista_pedido as $quant => $value){
    echo "<p></p><b>", $value,"</b>";
   
}
 
?></td></tr></table></center>
</div>

</center>
<form method="post" action="compra_cardapio.php">
<center><input type="submit" value="Comprar"> </center>
</form>
<?php include('rodape_index.php');?>
</body>
</html>