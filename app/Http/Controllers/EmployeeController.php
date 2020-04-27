<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function showAllEmployees()
    {
        return response()->json(Employee::all());
    }

    public function showOneEmployee($id)
    {
        return response()->json(Employee::find($id));
    }

    public function create(Request $request)
    {
        $employee = Employee::create($request->all());
        return response()->json($employee, 201);
    }

    public function update($id, Request $request)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return response()->json($employee, 200);
    }

    public function delete($id)
    {
        Employee::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
