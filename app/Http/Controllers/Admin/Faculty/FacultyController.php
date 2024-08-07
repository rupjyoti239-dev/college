<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Subject;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return view('Admin.faculty.index', compact('faculties'));
    }

    public function add()
    {
        $departments = Department::all();
        $subjects = Subject::all();
        return view('Admin.faculty.form',compact('departments','subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'subject_id' => 'required|exists:subjects,id',
            'name' => 'required|string',
            'designation' => 'required|string',
            'joining_date' => 'required|date',
            'email' => 'required|unique:faculties,email'
        ]);

       $faculty = new Faculty();
       $faculty->name = trim($request->name);
       $faculty->email = trim($request->email);
       $faculty->designation = trim($request->designation);
       $faculty->joining_date = ($request->joining_date);
       $faculty->department_id = ($request->department_id);
       $faculty->subject_id = ($request->subject_id);
       $faculty->save();
        return redirect()->route('admin.faculty.list')->with('success', 'Faculty Add successfully');
    }

    public function delete($id)
    {
        $faculty = Faculty::findOrFail($id);

        if ($faculty) {
            $faculty->delete();
            return back()->with('success', 'Faculty successfully deleted');
        } else {
            return back()->with('success', 'Faculty not found');
        }
    }



    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        $departments = Department::all();
        $subjects = Subject::all();

        if ($faculty) {
            return view('Admin.faculty.edit', compact('faculty','departments','subjects'));
        } else {
            return back()->with('success', 'Department not found');
        }
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'subject_id' => 'required|exists:subjects,id',
            'name' => 'required|string',
            'designation' => 'required|string',
            'joining_date' => 'required|date',
            'email' => 'required|unique:faculties,email,'.$id
        ]);

        $faculty = Faculty::findOrFail($id);
        $faculty->name = trim($request->name);
        $faculty->email = trim($request->email);
        $faculty->designation = trim($request->designation);
        $faculty->joining_date = ($request->joining_date);
        $faculty->department_id = ($request->department_id);
        $faculty->subject_id = ($request->subject_id);
        $faculty->save();

        return redirect()->route('admin.faculty.list')->with('success', 'Updated successfully');
    }
}