<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::with('employees')->get();

        return response()->json(['departments' => $departments], 400);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        $department = Department::create($request->validated());

        if($request->has('employee_ids')) {
            $department->employees()->attach($request->employee_ids);
        }

        return response()->json(['department' => $department], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        $item = Department::with('employees')->find($department->id);

        return response()->json(['department' => $item], 400);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        if($request->has('employees_ids')) {
            $department->employees()->sync($request->employees_ids);
        }

        return response()->json(['department' => $department], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return response()->json(['department' => $department], 400);
    }

    public function restore(Department $department)
    {
        $department->restore();

        return response()->json(['department' => $department], 400);
    }

    public function forceDelete(Department $department)
    {
        $department->forceDelete();

        return response()->json(null, 400);
    }
}
