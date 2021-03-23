<?php
include ("conexion.php");
//Glachi cotizador
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
        <title>Cotizador INTERHOME</title>
		
    </head>
    <body>
   

<div class="content_wrapper">
<h1>Cotizá a medida</h1>
<form name="cotizador" method="post">
<input type="number" name="ancho" step="0.01" placeholder="Ingrese el ancho en metros ej:1.20" required><br>
<input type="number" name="alto" step="0.01" placeholder="Ingrese el alto en metros ej:1.20" required><br>
<input type="radio" value="blackout" name="cortina" checked><label>Blackout</label><br>
<input type="radio" value="sunscreen" name="cortina"><label>Sunscreen</label><br>
<input type="radio" value="rustica" name="cortina"><label>Rústica</label><br>
<input type="radio" value="roller" name="cortina"><label>Roller</label><br>
<input type="radio" value="dual_eclipse" name="cortina"><label>Dual (Eclipse)</label><br>
<input type="radio" value="bandas_verticales1" name="cortina"><label>Bandas verticales</label><br>
<input type="number" name="cantidad" placeholder="Ingrese la cantidad de cortinas" min="1" required><br>


<button value="Cotizar" name="submit" class="button">Cotizar</button>

<?php

if(isset($_POST['submit'])) {

//Obteniendo los valores del form
$cortina = $_POST['cortina'];
$ancho = $_POST['ancho'];
$alto=	$_POST['alto'];	
$cantidad = $_POST['cantidad'];
//Consulta a la BD
$sql = "SELECT tipo_de_cortina, valor FROM cortinas WHERE tipo_de_cortina='$cortina'";
$result=mysqli_query($conn,$sql) or die ("no anda");
$row=mysqli_fetch_array($result);

$tipo_de_cortina = $row['tipo_de_cortina'];
$valor = $row['valor'];

//Cálculo del presupuesto
$resultado =$ancho*$alto*$valor*$cantidad;
//compara entre los valores de la BD y lo seleccionado por el usuario

if($cortina == $tipo_de_cortina){
	
	echo "<h1>Presupuesto</h1>Presupuesto por <strong>$cantidad</strong> 
	cortina/s tipo <strong>$tipo_de_cortina</strong> de <strong>$ancho x $alto metros</strong> es de: 
	<br><h1 style=text-align:center;>Total: $$resultado pesos</h1><br>
	<a href=https://wa.me/+542236321230?text=Quisiera%20obtener%20más%20información%20por%20un%20presupuesto%20por%20$cantidad%20cortina/s%20tipo%20$tipo_de_cortina%20de%20$ancho%20x%20$alto%20metros%20por%20un%20total%20de%20$$resultado%20pesos. class=enlace>Contactar por WhatsApp</a></div>";
	
	}

else{
	
	echo  "No hay precios disponibles para este producto";
	}

}

mysqli_close($conn);
?>
</form>
</body>
</html>

