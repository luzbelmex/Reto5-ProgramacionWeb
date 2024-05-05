<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="card.css">
  <script src="https://kit.fontawesome.com/dcb5788fea.js" crossorigin="anonymous"></script>
  <title>Card</title>
</head>

<body>

  <div class="contenedor">
    <div class="imagen">
      <img src="icono.jpg" alt="foto del alumno">
    </div>
    <div class="informacion-alumno">
      <h2>Alumno</h2>
      <p><span>Alumno:</span> <?php echo $nombre . " " . $apellido  ?> </p>
      <p><span>Edad:</span> <?php echo $edad  ?> </p>
      <p><span>Contacto:</span> <?php echo $correo  ?> </p>
    </div>
  </div>

</body>

</html>