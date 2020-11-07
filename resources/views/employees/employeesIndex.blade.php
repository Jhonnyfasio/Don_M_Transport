<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados</title>
  </head>
  <body>
    <h1>Listado de Empleados</h1>
    <a href="/employees/create">Registrar nuevo empleado</a>

    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
      </tr>
      @foreach ($employees as $employee)
        <tr>
          <td>{{$employee->id}}</td>
          <td><a href="/employees/{{$employee->id}}">{{$employee->name}}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
