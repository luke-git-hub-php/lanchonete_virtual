<html>
<head>
</head>
<?php include("conecta.php");?>
<?php
include("header_index.php");
?>
<body>
  <br>
  <br>
  <br>
   <br>
  <br>
  <br>
  <p align="center">
  <table border="5" >
	<?php 
 $resultado=mysqli_query($conecta,"SELECT * FROM produtos");
  if($resultado){
   while($row = mysqli_fetch_assoc($resultado)){
      	?>
   	<tbody>
      	<tr>
       		<td>
       		<?php echo "<p></p>",$row['id_produtos'];?>
      			</td>
          			<td>
       				<?php echo "<p></p>",$row['nome_prod'];?></td>
       				<td><?php echo "<p></p>",$row['preco'];?></td>
               <td><input type="checkbox" name="butao" onclick="<?php echo $row['id_produtos'];?>">Excluir</a></td>
          	</tr>
            </tbody>
            <?php
        }//fim do while
        }//fim do if 
        
        ?>
	</table></p>
	<p align="center">
<h1>Formulário de Entragas<h1>
	<form method="POST" action="recebe.php">
	<label>Digite sua rua:</label><input type="text" name="rua"><br>
	<label>Digite o número da sua casa:</label><input type="text" name="num"><br>
	<input type="submit" name="Enviar">  
</form>
</p>
<?php
include("rodape_index.php");
?>
</body>
</html>