<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees = Employee::get();
      //dd($employees);
      return view('/employees/employeesIndex', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/employees/employeeForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Recibe datos
      //dd($request->all());
      //dd($request->input('name'));
      //dd($request->name);

      // Valida
      $request->validate([
      'name'=>['required','string','max:255'],
      'firstname'=>['required','string','max:255'],
      'lastname'=>['required','string','max:255'],
      //'worker_code'=>is_numeric,
      'email' => 'email:rfc,dns'
      ]);

      // Guarda
      $employee = new Employee();
      $employee->name = $request->name;
      $employee->firstname = $request->firstname;
      $employee->lastname = $request->lastname;
      $employee->worker_code = $request->worker_code;
      $employee->email = $request->email;
      $employee->save();
      // Redirecciona
      return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
      //$employee = Employee::find($id);
      //$employee = Employee::where('name','Manuel')->first();
      //return view('/employees/employeesIndex', compact('employees'));
      return view('/employees/employeeShow', compact('employee'));
      //return view('/employees/employeeForm');
      //dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
