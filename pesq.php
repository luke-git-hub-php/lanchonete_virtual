<title>Lanchonete Lanche Rápido</title>
<script src="../projeto_lanchonete/js/jquery-3.1.1.js"></script>
<link rel="stylesheet" type="text/css" href="css/pesqcss.css">
<center><img src = "img/logof1.png"  id = "x"></center> 
<hr class = "barra2" color = "#e3e3e3" >
<hr class = "barra" color = "#e8c379" size = "55" width = "425px">
         <script type="text/javascript">

$(document).ready(function(){
    $("#cardapio").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<div id="menu">
    <ul>
        <li><a href="#">Início</a></li>
            <li id = "cardapio"><a href="#">Cardápio</a></li>
            <li><a href="#">Sobre</a></li>
    </ul>
</div> 
<div id="cardapio"></div>
<div id="panel">
  </div>
<div id="container">
    <div id="form">
    <form action="busca.php" method="POST">
      <fieldset class="entypo-search"><input id="search" name="busca" placeholder="Pesquisa" /></fieldset>
    </form> 
  </div>
</div>
  
</div>
<style> 
#panel {
    padding: 5px;
    text-align: center;
    background-color: #8c7a5f;
    border: solid 1px #8c7a5f;
    margin-top: -440px;
}

#panel {
    padding: 50px;
    display: none;
}
.entrar{
  margin-top: 0px;
}
</style>


<div id="footer">
    <center><br>Copyright © 2016 | Lanchonete lanche rápido</center>
  </div>
