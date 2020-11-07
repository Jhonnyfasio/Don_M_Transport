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
        <label for="name">Nombre:</label>
        <input type="text" name="name"><br>

        <label for="firstname">Apellido Materno:</label>
        <input type="firstname" name="firstname"><br>

        <label for="lastname">Apellido Paterno:</label>
        <input type="lastname" name="lastname"><br>

        <label for="worker_code">Código:</label>
        <input type="worker_code" name="worker_code"><br>

        <label for="email">email:</label>
        <input type="email" name="email"><br>

        Esto es un formulario
        <button type="submit">Guardar</button>
      </form>
  </body>
</html>
