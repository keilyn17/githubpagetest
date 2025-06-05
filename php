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
			echo "La suma de las variables numéricas es = ", $a+$b, "<br>";<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div class="container mt-5">
    <button type="button" class="btn btn-primary">Variables</button>
    <button type="button" class="btn btn-secondary">Departamentos</button>
    <button type="button" class="btn btn-link">Informacion</button>
  </div>

</body><!doctype html>
<html lang="es">
<head>
      <meta charset="utf-8">
		
<title>Departamentos con su cabecera</title>
   </head>
        <body>
	       <h1 align="center">Departamentos de Guatemala</h1>
	       <h2 align="center">Con sus cabeceras</h2>
	       <hr>
	       <?php
		     echo "Alta Verapaz: Cobán";
			 echo "Baja Verapaz: Salamá";
			 echo "Chimaltenango: Chimaltenango";
			 echo "Chiquimula: Chiquimula";
			 echo "El Progreso: Guastatoya";
			 echo "Escuintla: Escuintla";
			 echo "Guatemala: Ciudad de Guatemala";
			 echo "Huehuetenango: Huehuetenango";
			 echo "Izabal: Puerto Barrios";
			 echo "Jalapa: Jalapa";
			 echo "Jutiapa: Jutiapa";
			 echo "Petén: Flores";
			 echo "Quetzaltenango: Quetzaltenango";
			 echo "Quiché: Santa Cruz del Quiché";
			 echo "Retalhuleu: Retalhuleu";
			 echo "Sacatepéquez: Antigua Guatemala";
			 echo "San Marcos: San Marcos";
			 echo "Santa Rosa: Cuilapa";
			 echo "Sololá: Sololá";
			 echo "Suchitepéquez: Mazatenango";
			 echo "Totonicapán: Totonicapán";
			 echo "Zacapa: Zacapa";
			?>
        <ol>
             <li><strong>Alta Verapaz: </strong>Cobán</li>
             <li><strong>Baja Verapaz:</strong> Salamá</li>
             <li><strong>Chimaltenango: </strong>Chimaltenango</li>
             <li><strong>Chiquimula:</strong> Chiquimula</li>
             <li><strong>El Progreso:</strong> Guastatoya</li>
             <li><strong>Escuintla:</strong> Escuintla</li>
             <li><strong>Guatemala:</strong> Ciudad de Guatemala</li>
             <li><strong>Huehuetenango:</strong> Huehuetenango</li>
             <li><strong>Izabal: </strong>Puerto Barrios</li>
             <li><strong>Jalapa:</strong> Jalapa</li>
             <li><strong>Jutiapa: </strong>Jutiapa</li>
             <li><strong>Petén: </strong>Flores</li>
             <li><strong>Quetzaltenango:</strong> Quetzaltenango</li>
             <li><strong>Quiché</strong>: Santa Cruz del Quiché</li>
             <li><strong>Retalhuleu: </strong>Retalhuleu</li>
             <li><strong>Sacatepéquez:</strong> Antigua Guatemala</li>
             <li><strong>San Marcos:</strong> San Marcos</li>
             <li><strong>Santa Rosa</strong>: Cuilapa</li>
             <li><strong>Sololá:</strong> Sololá</li>
             <li><strong>Suchitepéquez: </strong>Mazatenango</li>
             <li><strong>Totonicapán: </strong>Totonicapán</li>
             <li><strong>Zacapa:</strong> Zacapa</li>
        </ol>
        </body><!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>PHP-Info</title>
</head>
		
         <body>
		 <?php
	       phpinfo();
	     ?>
         </body>
</html>
</html>
</html>

			$d=$a-$b;
			echo "La diferencia de las variables numéricas es = ", $d, "<br>";
			echo $c, " tiene ", $b, " años <br>";
			$e=$a/$b;
			echo "La división de la primera entre la segunda variable es = ", number_format($e,2);
		?>
	
