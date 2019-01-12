<link rel="stylesheet" type="text/css" href="css/pesqcss.css">
<script type="text/javascript">

$(document).ready(function(){
    $("#cardapio").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<div id="menu">
    <ul>
        <li id = "entrar"><a href="#">Entrar</a></li>
            <li id = "cadastrar"><a href="#">Cadastrar</a></li>
            <li id = "adm"><a href="#">Admin</a></li>
    </ul>
</div> 
<div id="entrar"></div>
<div id="panel_entrar">
<div id="cadastrar"></div>
<div id="panel_cadastrar">
  </div>
  <div id="adm"></div>
<div id="panel_adm">
  </div>
  </div>
<style> 
#panel_entrar {
    padding: 5px;
    text-align: center;
    background-color: #8c7a5f;
    border: solid 1px #8c7a5f;
    margin-top: -440px;
}

#panel_entrar {
    padding: 50px;
    display: none;
}
#panel_cadastrar {
    padding: 5px;
    text-align: center;
    background-color: #8c7a5f;
    border: solid 1px #8c7a5f;
    margin-top: -440px;
}

#panel_cadastrar {
    padding: 50px;
    display: none;
}
#panel_adm {
    padding: 5px;
    text-align: center;
    background-color: #8c7a5f;
    border: solid 1px #8c7a5f;
    margin-top: -440px;
}

#panel_adm {
    padding: 50px;
    display: none;
}
</style>