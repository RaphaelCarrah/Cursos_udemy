
<?php  
//Escopo de Variavel. 
$nome = "Raphael";

function teste(){

	global $nome;
	echo $nome; 
}

function teste2(){

	global $nome;
	echo "</br>".$nome ." na função teste 2";
}

teste();
teste2();
?>

