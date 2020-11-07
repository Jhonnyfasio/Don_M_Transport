<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados</title>
  </head>
  <body>
    <h1>Información de Empleado</h1>
    <a href="/employees/create">Registrar nuevo empleado</a>

    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
      </tr>
      <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->name}}</td>
      </tr>
    </table>
  </body>
</html>
