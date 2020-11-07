<!DOCTYPE html>
<html lang="s" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados</title>
  </head>
  <body>
    <h1>Crear empleados</h1>
      <form action="/employees" method="POST">
        @csrf
        Esto es un formulario
        <button type="submit">Guardar</button>
      </form>
  </body>
</html>
