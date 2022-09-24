<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index() {
        
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'asal' => 'required',
        ]);
        
        Students::create($request->all());

        return redirect()->route('students.index')->with('success', 'Berhaslil menambahkan.');
    }

    public function edit(Students $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Students $student)
    {
        $request->validate([
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'asal' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success','Berhasil mengupdate');
      
    }
    
    public function destroy(Students $student)
    {
        $student->delete();
    
        return redirect()->route('students.index')->with('success','Berhasil menghapus');
     
    }
}
