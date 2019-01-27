<html>
<meta charset = "utf-8">
<html>
<head>
<title>Lanche Rápido</title>
<meta name="author" content="Lucas">
<meta name="description" content="Lanchonete Lanche Rápido - Um novo conceito em Lanches">
<meta name="keywords" content="lanches, bebidas,sobremesas,sanduíches">
</head>


<hr class = "barra" color = "#5F4236"><body><div id = "site"></div>
<hr class = "barra2" color = "#c4870f">
<center><img src="img/logof1.png" id = "x" width= "190px" height = "210px"></center>

</div>
<div id="menu">
    <ul>
        <li><a href="index.php">Início</a></li>
            <li><a href="cardapio.php">Cardápio</a></li>
                
                <li><a href="cadastro_clientes.php">Cadastre-se</a></li>
                <li><a href="login_area_restrita.php">Área Restrita</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><form action="busca.php" method="POST">
      <input id="search" name="busca" placeholder="Pesquisa" />
    </form> </li>
                    </ul>
</div>



<style type="text/css">
#site{
	margin-top:-100px;
	margin-left: 150px;
	margin-bottom:10px;
margin-right: 150px;
	font-size: 40px;
}
#x{
	margin-left: 10px;
	margin-top: -240px;
}

#search{
	border-radius: 100px;
	margin-left: 1150px;
	margin-top:-43px;
	height: 35px;
}
#nome{
	border-radius: 20px;
	margin-left:1075px;
	margin-top:-43px;
}
.barra2{
	margin-top: 100px;
	height: 50px;
}
.barra{
	height: 145px;
}
.rodape{
	margin-top: 870px; 
	height: 100px;
}
button{
margin-left: 500px;
	margin-top:-69px;	
}
#button2{
margin-left:300px;
margin-right:10px ;
	margin-top:0px;	
}
#menu{
	margin-top: -86px;
	margin-left:-10px;
	margin-right:50px;
}

#menu ul{
	position:absolute;
	padding:3px;
	list-style:none;
	text-align: center;
	font-size: 25px;
}

#menu ul li{display: inline;}

#menu ul li a{
	padding: 10px 20px;
	display: inline-block;
	color: black;
	text-decoration: none;
}

#menu ul li a:hover{
	background-color:#D6D6D6;
}
#footer{    
    background-color:#c4870f;
    position: relative; 
    bottom: 0; 
    margin-top: 100px;
    height: 60px;
    width: 100%;
}
#textorod{
	margin-top: 1000px;
}
</style>
	
</body>
</html>