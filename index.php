<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="index.css" />
  <title>Formulario</title>
</head>

<body>
  <section class="media-pantalla titulo">
    <h1>Plataforma educativa</h1>
  </section>
  <section class="media-pantalla formulario">
    <div class="contenedor">
      <form method="post" action="card.php">
        <div class="centrador">
          <h2>Registrar alumno</h2>

          <label>Nombre</label><br />
          <input id="nombre" type="text" name="nombre" placeholder="Inserta tu nombre" required />
          <br />

          <label>Apellidos</label><br />
          <input id="apeliido" type="text" name="apellido" placeholder="Inserta tu apellidos" required /><br />

          <label>Edad</label><br />
          <input id="edad" type="number" name="edad" placeholder="Inserta tu edad" required /><br />

          <label>Correo</label><br />
          <input id="correo" type="email" name="correo" placeholder="Inserta tu correo" required /><br />

          <label>Contraseña</label><br />
          <input id="pass" type="password" name="contraseña" placeholder="Inserta una contraseña" required /><br />

          <button id="boton" type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </section>
</body>

</html>