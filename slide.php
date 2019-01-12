<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
	<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="js/jqFancyTransitions.js" type="text/javascript"></script>
	<script type="text/javascript">
	function mouse_in(){
		
		document.getElementById("texto").style.color="red";
		}
	
	
	function mouse_out(){
	document.getElementById("texto").style.color="blue";
	}
</script>
<style type="text/css">
	body{
		background:#e9e9e9;
	}
	#d{
  margin:100px 0px 0px 0px;
  text-align: center;}
		</style>
</head>
<body>
<div id="d">
<h1 id="texto" onmouseover="mouse_in()" onmouseout="mouse_out()">Sanduíches saborosos</h1>
</div>
<center><div id='slideshowHolder'>
   <img src='img/foto1.jpg'/>
    <a href ='http://workshop.rs'/></a>
   <img src='img/foto2.jpg'/>
   <a href ='http://workshop.rs/projects/jqbargraph'></a>
   <img src='img/foto3.jpg'/>
    <a href ='http://workshop.rs/projects/moobargraph'></a>
</div>

<script>
$(document).ready( function(){
    $('#slideshowHolder').jqFancyTransitions({ 
    	width: 400, 
    	height: 300,
    	effect: 'zipper', // wave, zipper, curtain
		width: 500, // width of panel
		height: 332, // height of panel
		strips: 20, // number of strips
		delay: 3200, // delay between images in ms
		stripDelay: 50, // delay beetwen strips in ms
		titleOpacity: 0.7, // opacity of title
		titleSpeed: 1000, // speed of title appereance in ms
		position: 'alternate', // top, bottom, alternate, curtain
		direction: 'fountainAlternate', // left, right, alternate, random, fountain, fountainAlternate
		navigation: false, // prev and next navigation buttons
		links: false });
});
</script>
</center>
</body>
</html>