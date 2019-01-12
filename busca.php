<?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
<html>
<head>
<meta http-equiv="Content-Type" content=text/html; charset="iso-8859-1" />
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
<?php include("header_index.php");?>    
<center>
<div id="d">
<body>
<h1>Resultado da busca</h1>

<?php
header('Content-Type: text/html; charset=utf-8');
    $conecta = mysqli_connect("localhost","root","","lanchonete");
    $criterio = $_POST['busca'];
    $query = mysqli_query($conecta,"SELECT * FROM produtos WHERE nome_produto LIKE '%$criterio%'");
    $nr_linhas = mysqli_num_rows($query);
?>
<div>
<center>
<table width = "400" border="1" bgcolor=" #e8c379">
    <tr>
        <td align="center">Cód</td>
        <td align="center">Nome</td>
        <td align="center">Preço</td>
    </tr>
<?php
    for($i=0;$i<$nr_linhas;$i++){
        $campo = mysqli_fetch_assoc($query);
?>
    <tr>
        <td><?php echo $campo['id_produto'];?></td>
        <td><?php echo  utf8_decode($campo['nome_produto']);?></td>
        <td><?php echo number_format($campo['preco'],2,",",".");?></td>
    </tr>
<?php   
}
?></center></div>
</table>
</div>
<br><br><br><br>
<?php include("rodape_index.php");?>    
</body>
</html>