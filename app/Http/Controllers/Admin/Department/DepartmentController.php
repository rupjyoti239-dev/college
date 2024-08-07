<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('Admin.department.index', compact('departments'));
    }

    public function add()
    {
        return view('Admin.department.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string|max:255|unique:departments',
        ]);

        Department::create($request->all());
        return redirect()->route('admin.department.list')->with('success', 'Department created successfully');
    }

    public function delete($id){
        $department = Department::findOrFail($id);

        if($department){
            $department->delete();
            return back()->with('success','Department successfully deleted');
        }else
        {
            return back()->with('success', 'Department not found');
        }
    }



    public function edit($id)
    {
        $department = Department::findOrFail($id);

        if ($department) {
             return view('Admin.department.edit',compact('department'));
        } else {
            return back()->with('success', 'Department not found');
        }
    }


    public function update(Request $request, $id)
    {
        
        $request->validate([
            'department_name' => 'required|unique:departments,department_name,'.$id
        ]);

        $department = Department::findOrFail($id);
        
        $department->department_name = $request->department_name;
        $department->save();

        return redirect()->route('admin.department.list')->with('success','Updated successfully');
    }
}