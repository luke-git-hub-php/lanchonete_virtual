<html>
<head>
	<title>CARDÁPIO</title>
	<?php
	
$conexao=mysqli_connect("localhost","root","","lanchonete");
?>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<link rel="stylesheet" type="text/css" href="css/cardapio_css.css">
<?php include("header_index.php");?>	
	</head>
<body>

<center>
<div id="d"><h1 id="h1">Cardápio</h1>
	 <form name="cons" method="post" action="cardapio.php">
	Escolha uma categoria
<select name='sel_cat'>
  <?php
       $resultado=mysqli_query($conexao,"SELECT * FROM categoria");
    while($linha=mysqli_fetch_assoc($resultado)){
  ?>
	<option value="<?php echo $linha['id_categoria']; ?>">
	<?php echo $linha['categorias'];?></option>
	<?php }?>
	</select> 
	<input type="submit" value="Consultar">
</form>
<p></p>
<h1>Faça seu pedido</h1>
<table id="cadarpio" >
<caption>Itens do Cadárpio</caption>
<thead id="cardapio">
<tr id="horizotal">
<th>Nome</th>
<th scope="col">Preço</th>
<th>Marque o Item desejado</th>

</thead>
<tbody>
<?php
@$idcat=$_POST['sel_cat'];
$sql="SELECT * FROM produtos WHERE id_categoria='$idcat' ";
$querysql=mysqli_query($conexao,$sql);
while($linha_produtos=mysqli_fetch_array($querysql)){
	  ?><tr>
 	 <td><?php echo $linha_produtos['nome_produto'];?></td>
 	 <td><?php $linha_produtos['preco'];
       				 echo $valor_preco=number_format($linha_produtos['preco'],2,",","."); ?></td>
 	 	 <td><form method="post" action="recebe_pedido.php" >
 	 	 <input type="checkbox" name="escolha[]" value="<?php echo $linha_produtos['nome_produto'] ." | ".$valor_preco=number_format($linha_produtos['preco'],2,",",".");?>"></td>
 	 	 </tr>
 	  	  	 <?php
 	}   
	?></tbody>
	
		</table>
				<input type="submit" value="Realizar Pedido?"></form>
				</div>
				</center>
				<div id="footer"><center><br>Copyright © 2016 | Lanchonete lanche
rápido</center>     </div>
			</body>
</html>
