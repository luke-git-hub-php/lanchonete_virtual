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
<?php
$conecta=mysqli_connect("localhost","root","","lanchonete2")
  or print(mysqli_error($conecta));
  $id=$_GET['id'];
mysqli_query($conecta,"DELETE FROM produtos WHERE id_produtos='$id'");
mysqli_close($conecta);
echo '<meta charset=UTF-8>
<script> alert("Registro excluído")</script>';
echo "<script>
window.location=\"painel.php\"
</script>
";
  ?>
  </div>
<?php include('rodape_index.php');?>
</body>
</html>