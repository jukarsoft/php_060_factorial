<?php 

	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$factorial=1;
	$num=0;
	
	//se ejecuta si se ha pulsado el boton 'enviar'
	//comprobar si ha pulsado el boton
	if (isset($_POST['enviar'])) {
		$num=$_POST['num'];
		if (!is_numeric($num)) {
			echo "numero es un número";
		} else {
			echo "numero entrado: $num <br>";
			for ($i=1;$i<=$num;$i++) {
				$factorial*=$i;
				echo "$i  - $factorial <br>";
			}
			$factorial = "factorial de $num: $factorial";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factorial</title>
</head>
<body>
	<form method='post' action="#">
		<label>Factorial de: </label>
		<input type="number" name="num"  min="1" value="<?=$num;?>">
		<input type="submit" name="enviar" value="calcular">
		<input type="text" name="resultado" disabled value="<?=$factorial;?>">

	</form>
</body>
</html>