<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return View('employees.index', ["employees" => $employees]);
    }
    public function create()
    {
        return View('employees.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employee::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "street" => $request->street,
            "number" => $request->number,
            "suburb" => $request->suburb,
            "city" => $request->city,
            "postcode" => $request->postcode,
            "state" => $request->state,
            "stateAbbr" => $request->stateAbbr,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);
        return redirect()->route("employees.index")->with(["status" => "Empleado Creado"]);
    }
    public function show($id)
    {
        $employee = Employee::find($id);
        return $employee;
    }

    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
        $employee->update([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "street" => $request->street,
            "number" => $request->number,
            "suburb" => $request->suburb,
            "city" => $request->city,
            "postcode" => $request->postcode,
            "state" => $request->state,
            "stateAbbr" => $request->stateAbbr,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);
        return redirect()->route("employees.index")->with(["status" => "Empleado Actualizado"]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $employee = Employee::find($id);
        $employee->delete();
        return "ok";
    }
}
