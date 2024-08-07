<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('Admin.subject.index', compact('subjects'));
    }

    public function add()
    {
        $departments = Department::all(); 
        return view('Admin.subject.form',compact('departments'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'subject_name' => 'required|string|'
        ]);

        $subject = new Subject();
        $subject->department_id = $request->department_id;
        $subject->subject_name = trim($request->subject_name);
        $subject->save();
        return redirect()->route('admin.subject.list')->with('success', 'Subject created successfully');
    }

    public function delete($id)
    {
        $subject = Subject::findOrFail($id);

        if ($subject) {
            $subject->delete();
            return back()->with('success', 'Subject successfully deleted');
        } else {
            return back()->with('success', 'Subject not found');
        }
    }



    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $departments = Department::all();

        if ($subject) {
            return view('Admin.subject.edit', compact('subject','departments'));
        } else {
            return back()->with('success', 'Subject not found');
        }
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'subject_name' => 'required|string',
        ]);

        $subject = Subject::findOrFail($id);

        if(!$subject){
            return back()->with('error', 'Subject not Found');
        }

        $subject->department_id = $request->department_id;
        $subject->subject_name = trim($request->subject_name);
        $subject->save();

        return redirect()->route('admin.subject.list')->with('success', 'Updated successfully');
    }
}