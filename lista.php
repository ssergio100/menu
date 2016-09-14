<?php

$pdo = new PDO('mysql:dbname=testes;host=127.0.0.1','root','09271185');

$rs = $pdo->query("SELECT * FROM menu where codpai is null");
$rs->setFetchMode(PDO::FETCH_CLASS, 'MenuItem');

while($row = $rs->fetch()){
	//echo $row['nome'];
}
 



function criarMenu($categoriaPai) {
echo "<ul class='noJS'>";

global $pdo;
if(!$categoriaPai){$sql = "SELECT * FROM menu where codpai is NULL";}else{
$sql = "SELECT * FROM menu where codpai = $categoriaPai";
}
//echo "SELECT * FROM menu where codpai = $categoriaPai";
$rs = $pdo->query($sql);
$rs->setFetchMode(PDO::FETCH_CLASS, 'MenuItem');

while($row = $rs->fetch()){
 
	echo "<li>".$row["nome"];
	criarMenu($row["codmenu"]); // recursividade
		echo "</li>";
	}
	echo "</ul>";
}


?>
<html>
	<head>
	</head>
	<body>
<ul id="MainMenu">
	<?php criarMenu(0); ?>
</ul>
	<script
			  src="https://code.jquery.com/jquery-3.1.0.min.js"
			  integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
			  crossorigin="anonymous"></script>
	<script>
$(document).ready(function() {
   
alert();
		
		    $('#MainMenu > li').click(function(e) {
			e.stopPropagation();
			var $el = $('ul',this);
			$('#MainMenu > li > ul').not($el).slideUp();
			$el.stop(true, true).slideToggle(400);
		    });
			$('#MainMenu > li > ul > li').click(function(e) {
			e.stopImmediatePropagation();  
		    });
		});
	</script>
	</body>
<html>


