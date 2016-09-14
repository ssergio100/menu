<?php

$pdo = new PDO('mysql:dbname=testes;host=127.0.0.1','root','09271185');

$rs = $pdo->query("SELECT * FROM menu where codpai is null");
$rs->setFetchMode(PDO::FETCH_CLASS, 'MenuItem');

while($row = $rs->fetch()){
	//echo $row['nome'];
}
 



function criarMenu($categoriaPai) {
echo "<ul>";

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

criarMenu(0);
?>



