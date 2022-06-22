<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrategias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="formulario">
        <form action="">
          <fieldset>
            <!-- contenedor de los campos -->
            <legend>contáctanos</legend>
            <div class="contenedor-campos">
            <div class="campo">
              <label for="">Nombre:</label>
              <input class="input-text" type="text" placeholder="Tu Nombre" />
            </div>
            <div class="campo">
              <label for="">Teléfono:</label>
              <input class="input-text" type="tel" placeholder="Tu Teléfono" />
            </div>
            <div class="campo">
              <label for="">Correo:</label>
              <input class="input-text" type="email" placeholder="Tu Correo" />
            </div>
            <div class="campo">
              <label for="">Mensaje:</label>
              <textarea class="input-text" cols="15" rows="5"></textarea>
            </div>
          </div>
            <div class="alinear-derecha flex">
              <input class="boton w-sm-100" type="submit" value="Enviar" />
            </div>
          </fieldset>
        </form>
      </section>
</body>
</html>
