  <div id="sair">
<?php

   session_start();
   if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
         header("location:login_area_restrita.php");
         exit;          
   }else{
      	echo "<center><font color='red'>Você está logado!</font></center>";
   }
?>
</div>
<!DOCTYPE html>
<html>
<head>
	<title>Painel</title>

	<script src="../jquery/jquery/jquery-1.12.3.min.js"></script>
	<script src="../jquery/jquery/jquery-ui.js"></script>
<link href="../jquery/jquery/jquery-ui.css" rel="stylesheet">
<script>
$(function() {
  $( "#tabs" ).tabs();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
       	 $('.dica + span')
       	 .css({display:'none',
       	       border: '1px solid #336600',
       	       padding:'2px 4px',
       	       background:'#999966',
       	       marginLeft:'10px'   });
       	 $('.dica').focus(function() {
           $(this).next().fadeIn(1500);    	 	
       	 })
       	 .blur(function(){
       	 	$(this).next().fadeOut(1500);
       	 });
       });
	</script>
	<script src="../jquery/jquery/jquery-1.11.2.min.js"></script>
	<script src="../jquery/jquery/jquery-ui.js"></script>
	<link href="../jquery/jquery/jquery-ui.css" rel="stylesheet">
	<script>
	//Aplica o padrão da animação e velocidade para exibição do efeito
	$.fx.speeds._default =1000;
	$(function() {
		$("#dialog" ).dialog({
           autoOpen: false,
           show: "blind",
           hide: "explode"
		});
		$( "#opener" ).click(function() {
            $( "#dialog" ).dialog( "open" );
            return false;
		});
	});
	</script>
	</script>
	<style type="text/css">
	body{
		background:#e9e9e9;
	}
#d{
	margin:100px 50px 95px 30px;
	background:#e9e9e9;
}
#opener{ margin-left:1100px ;
	width:100px;
	margin-top: -90px;
}
	</style>
</head>
<body>
<?php include('header_index.php');?>
<div id="d">
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Consultar</a></li>
		<li><a href="#tabs-2">Cadastrar</a></li>
		</ul>
	<div id="tabs-1">
	<?php
$conecta=mysqli_connect("localhost","root","","lanchonete")
  or print(mysqli_error($conecta));
  ?>
	<p></p>
	<h1>Listando dados da Tabela</h1>
	<table border="1" id="t">
		<thead>
			<tr>
				<th>ID</th>
				<th>nome</th>
				<th>Preço</th>
                <th>Alterar</th> 
                <th>Excluir</th>
			</tr>
		</thead>
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
       				<td><?php $row['preco'];
       				 echo $valor_preco=number_format($row['preco'],2,",","."); ?></td>
               <td><a href="alterar.php?id=<?php echo $row['id_produtos'];?>">Alterar</a></td>
               <td><a href="excluir.php?id=<?php echo $row['id_produtos'];?>">Excluir</a></td>
          	</tr>
            </tbody>
            <?php
        }//fim do while
        }//fim do if
        mysqli_close($conecta);//fecha conexão
        ?>
	</table></div>
<div id="tabs-2">
	<h1>Cadastro de Produtos</h1>
<form name="form_cad" method="POST" action="insere_produtos.php">
<label>Nome do Produto</label>	<input type="text" name="nome_prod" value="" size="50" /><br>
<label>Preço</label>	<input type="text" name="preco" value="" size="50" /><br>
<label for="id_categoria">ID_categoria:</label></br>
    <input  name="id_categoria" type="text" id="id_categoria" class="dica"/> <span>Categorias:"1-Bebidas" ,"2-Entradas" ,"3-Sobrimesas","4-Especias"</span></br>
	 <p><input type="submit" name="enviar" value="Cadastrar" /></p>
</form>
</div>
</div>
</div>
<center>
<p>	<div id="dialog" title="Janela de Dialogo">
		<p >
		<a href="logout_area_restrita.php">Confirmar sua saída?<br> Sim
		</p>
	</div>
	<button id="opener">Sair</button>
</p>
</a></center>
<?php include('rodape_index.php');?>
</body>
</html>