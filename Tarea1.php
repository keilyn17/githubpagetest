<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>variables</title>
	
	
	
	</head>
		<body>
		<?php
			echo "USO DE VARIABLES <p> Estos son los valores de mis variables:";
			$a=4.5;
			$b=2;
			$c="Susana Horia";
			echo "Variable No. 1 = ", $a, "<br>";
			echo "Variable No. 2 = ", $b, "<br>";
			echo "Variable No. 3 = ", $c, "<br>";
			echo "La suma de las variables numéricas es = ", $a+$b, "<br>";
			$d=$a-$b;
			echo "La diferencia de las variables numéricas es = ", $d, "<br>";
			echo $c, " tiene ", $b, " años <br>";
			$e=$a/$b;
			echo "La división de la primera entre la segunda variable es = ", number_format($e,2);
		?>
	
		</body>
</html>