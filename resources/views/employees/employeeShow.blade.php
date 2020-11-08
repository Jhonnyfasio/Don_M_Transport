@extends('layouts.app')

@section('content')

    <h1>Información de Empleado</h1>
    <a href="{{action([\App\Http\Controllers\EmployeesController::class, 'index']) }}">Listado de Empleados</a>
    <br>
    <a href="{{action([\App\Http\Controllers\EmployeesController::class, 'create']) }}">Registrar nuevo empleado</a>
    <br>
    <a href="{{route('employees.edit', [$employee->id]) }}">Editar Empleado</a>

    <form action="{{ route('employees.destroy', [$employee]) }}" method="POST">
        @method('DELETE');
        @csrf
        <button type="submit" name="button">Eliminar</button>
    </form>

    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
      </tr>
      <tr>
        <td>{{$employee->worker_code}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->firstname}}</td>
        <td>{{$employee->lastname}}</td>
        <td>{{$employee->email}}</td>
      </tr>
    </table>

@endsection
