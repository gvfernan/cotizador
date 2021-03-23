<?php
include ("conexion.php");
//Glachi cotizador
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
        <title>EDITAR - Cotizador INTERHOME</title>
		
    </head>
    <body>
<div class="content_wrapper">
<h2>Editar valores de cortinas</h2>

<table border="2">
  <tr>
	<td>ID</td>
    <td>Tipo de cortina</td>
    <td>Valor del m2</td>
	<td>Hacé clic para editar el valor</td>
  </tr>

<?php


$records = mysqli_query($conn,"select * from cortinas"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['tipo_de_cortina']; ?></td>
    <td><?php echo $data['valor']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="button">Editar</a></td>
    
  </tr>	
<?php
}
?>
</table>
</div>
</body>
</html>