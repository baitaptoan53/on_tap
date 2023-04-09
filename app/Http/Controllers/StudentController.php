<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\student;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hien thi danh sach student
        $students = student::all();
        // phan trang
        $students = student::paginate(10);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        return view('students.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required',
            'givenname' => 'required',
            'date_of_birth' => 'required|date',
            'yearenrolled' => 'required|min:1|max:4',
            'program_id' => 'required',
        ]);

        $student = new student();
        $student->surname = $request->surname;
        $student->givenname = $request->givenname;
        $student->date_of_birth = $request->date_of_birth;
        $student->yearenrolled = $request->yearenrolled;
        $student->program_id = $request->program_id;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // hien thi form edit
        $student = student::find($id);
        $programs = Program::all();
        return view('students.edit', compact('student', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
        ]);
        $student = student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xoa mem student
        $student = student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);
        $search = $request->search;
        $students = student::where('surname', 'like', "%$search%")
            ->orWhere('givenname', 'like', "%$search%")
            ->paginate(10);
        $count = $students->count();
        return view('students.search', compact('students', 'count'));
    }
    
}
