@extends('layouts.app')

@section('content')

    <h1>Crear empleados</h1>
    <a href="{{action([\App\Http\Controllers\EmployeesController::class, 'index']) }}">Listado de Empleados</a>
    <br>
    @if ($errors->any())
      <div class="aler alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(isset($employee))
      <form action="{{ route('employees.update', [$employee]) }}" method="POST">
        @method('patch')
    @else
      <form action="{{ route('employees.store') }}" method="POST">
    @endif
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{old('name') ?? $employee->name ?? ''}}"> <br>

        <label for="firstname">Apellido Materno:</label>
        <input type="firstname" name="firstname" value="{{old('firstname') ?? $employee->firstname ?? '' }}"><br>

        <label for="lastname">Apellido Paterno:</label>
        <input type="lastname" name="lastname" value="{{old('lastname')  ?? $employee->lastname ?? ''}}"><br>

        <label for="worker_code">Código:</label>
        <input type="worker_code" name="worker_code" value="{{old('worker_code') ?? $employee->worker_code ?? ''}}"><br>

        <label for="email">email:</label>
        <input type="email" name="email" value="{{old('email') ?? $employee->email ?? ''}}"><br>

        Esto es un formulario
        <button type="submit">Guardar</button>
      </form>

@endsection
