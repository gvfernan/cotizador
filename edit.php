<html lang="es">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
        <title>EDITAR - Cotizador INTERHOME</title>
		
    </head>
    <body>
	<div class="content_wrapper">
<?php

include "conexion.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from cortinas where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
        $valor = $_POST['valor'];
	
    $edit = mysqli_query($conn,"update cortinas set valor='$valor' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn);
		header("location:editar.php");
		exit;		// Close connection
           }
    else
    {
        echo "no se pudo actualizar";
    }    	
}
?>

<h3>Actualizar valor</h3>

<form method="POST">
  Tipo de cortina <?php echo $data['tipo_de_cortina'] ?> a: <input type="text" name="valor" value="<?php echo $data['valor'] ?>" placeholder="Ingrese nuevo valor" Required><br><br>
  <input type="submit" name="update" value="Actualizar" class="button">
</form>
</div>
</body>
</html>