<?php

// $_GET
$numero = $_GET['id'];

/*
	switch(condicionante){
		case 1:
			......;
			break;
		case 2:
			......;
			break;
		
		......
		
		default:
			......;
			break;
	}
*/

switch($numero){
	case "Clara":
		echo "<p style='color:red;'>Ola Clara</p>";
		break;
	case "Txema":
		echo "<p style='color:aquamarine;'>Ola Txema</p>";
		break;
	case "Antonio":
		echo "<p style='color:blue;'>Ola Antonio</p>";
		break;
	case "Alberto":
		echo "<p style='color:Aqua;'>Ola Alberto</p>";
		break;
	case "Carolina":
		echo "<p style='color:BlanchedAlmond;'>Ola Alberto</p>";
		break;
	case "Iria":
		echo "<p style='color:Chocolate;'>Ola Iria</p>";
		break;
	case "Fernando":
		echo "<p style='color:green;'>Ola Fernando</p>";
		break;
	default:
		echo "Los datos no me valen";
		break;
}


?>