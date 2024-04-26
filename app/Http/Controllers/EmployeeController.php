<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('department')->get();

        return response()->json(['employees' => $employees], 400);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        try {
            $item = Employee::create($request->validated());

            if($request->has('department_id')) {
                $item->department()->attach($request->department_id);
            }

            return response()->json(['employee' => $item], 400);
        } catch (\Exception $e) {
            Log::error($e);

            return response()->json(['error' => 'can not create an employee', 'message' => $e], 201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $item = Employee::with('department')->find($employee->id);

        return response()->json(['employee' => $item], 400);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        if($request->has('department_id')) {
            $employee->department()->sync($request->department_id);
        }

        return response()->json(['employee' => $employee], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(['employee' => $employee], 400);
    }

    public function restore(Employee $employee)
    {
        $employee->restore();

        return response()->json(['employee' => $employee], 400);
    }

    public function forceDelete(Employee $employee)
    {
        $employee->forceDelete();

        return response()->json(null, 400);
    }

}
