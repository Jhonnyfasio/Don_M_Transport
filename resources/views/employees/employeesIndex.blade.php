@extends('layouts.app')

@section('content')

    <h1>Listado de Empleados</h1>
    <a href="/employees/create">Registrar nuevo empleado</a>

    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
      </tr>
      @foreach ($employees as $employee)
        <tr>
          <td>{{$employee->worker_code}}</td>
          <td><a href="/employees/{{$employee->id}}">{{$employee->name}}</td>
          <td>{{$employee->firstname}}</td>
          <td>{{$employee->lastname}}</td>
          <td>{{$employee->email}}</td>
        </tr>
      @endforeach
    </table>

@endsection
