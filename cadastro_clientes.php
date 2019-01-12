<html>
<head>
		 <link href="css/estilo_form2.css" rel="stylesheet">
	 	<script type="text/javascript" src="../projeto_lanchonete/jquery/jquery-1.12.3.min.js"></script>
      <script> 
        function Mascara(objeto){
 //verifica se o valor do objeto
 //é igual a 0, para inserir o 1º caractere
           if(objeto.value.length==0)
              objeto.value='(' +objeto.value;

              	if(objeto.value.length==3)
              		objeto.value= objeto.value +')';
                   
                   if(objeto.value.length==9)
                       objeto.value=objeto.value +'-';     
        }	 
       </script>
       <script>
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
       </head>
<body>
<?php include('header_index.php');?>
<div id="d">
<form action="cadastrar_clientes.php" method="POST" id="formulario">

	
	<span class="form_cont">
	</span>
	<div class="form_cont">
		<div class="cab" align="center">Formulário de Cadastro</div>
				<table width="316" border="0" align="center">
				<tr>
				<td width="350">
				<label>
				Nome Completo:
				<input type="text" size="40" name="nome" />	
				</label>
				</td>
				</tr>
				<tr>
				<td>
				<label for="Tel">Telefone:</label>
				<input type="text" size="40" name="tel" id="tel" class="dica" maxlength="14" onKeypress="Mascara(this);" /><span>Digite o seu (DDD) antes do número</span>
				</td>
				</tr>
				<tr>
				<td>
				<label for="Tel">Data de Nascimento:</label>
				<input type="date" size="40" name="data" id="data" />
				</td>
				</tr>
				<tr>
				<td>
				<label for="e_mail">E-mail:</label>
				<input type="EMAIL" size="40" name="email" id="e_mail" class="dica" /><span>Somente um E-mail Válido!</span>
				</td>
				</tr>
				<tr>
				<td>
				<label for="">Senha:</label>
				<input type="password" size="15" maxlength="8" name="senha" id="senha" />
				</td>
				</tr>
				<tr>
				<td>
				<input type="submit" size="40" value="Cadastrar" /><input type="reset" value="Apagar" name="apagar">
				</td>
				</tr>
				</table>	
			</div>

</form>

</div><br><br><br><br>

<div id="button"><button><a href="login_clientes.php">Entrar</a></button></div>

<?php include('rodape_index.php');?>
</body>
</html>
