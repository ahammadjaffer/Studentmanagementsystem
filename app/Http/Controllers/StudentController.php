<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Marks;
class StudentController extends Controller
{
    /**
     * Display a list of students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();
        return view("student.index",["students"=>$student]);
    }
    
    /**
     * Show the form for rendering the create page of student.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("student.create");   
    }
    
    /**
     * Store a newly created student details in databse.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'reporting'=>'required',
        ]);
        $student= new Student();
        $student->name=$request->name;
        $student->age=$request->age;
        $student->gender=$request->gender;
        $student->reporting_teacher=$request->reporting;
        $student->save();
        return redirect()->route("student.index");
    }

    /**
     * Method for rendering the detail page of the student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        return view("student.details",["students"=>$student]); 
    }

    /**
     * Update the specified student details in databse.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student=Student::find($id);
        $student->name=$request->name;
        $student->age=$request->age;
        $student->gender=$request->gender;
        $student->reporting_teacher=$request->reporting;
        $student->save();
        return redirect()->route("student.index");
    }

    /**
     * Remove the specified student from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route("student.index")->with('success','deleted successfully');
    }
    //
     /**
     * Display a list of students with their marks.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentmarkindex()
    {
        $studentmark=Marks::all();
        return view("student.marksindex",["marks"=>$studentmark]);
    }
    /**
     * Show the form for creating a new student with marks.
     *
     * @return \Illuminate\Http\Response
     */
    public function markscreate()
    {
        $students=Student::all();
        return view("student.markscreate",["students"=>$students]); 
    }
    
    /**
     * Store a newly created student marks details in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function marksstore(Request $request)
    {
        
        $studentmarks= new Marks();
        $studentmarks->name=$request->studentname;
        $studentmarks->maths=$request->mathss;
        $studentmarks->science=$request->science;
        $studentmarks->history=$request->history;
        $studentmarks->term=$request->termselect;
        $studentmarks->total_marks='';
        $studentmarks->save();
        $studentmark=Marks::all();
        return view("student.marksindex",["marks"=>$studentmark]);
    }

    /**
     * Display the specified student details.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function marksshow($id)
    {
        $studentmark=Marks::find($id);
        return view("student.marksdetails",["marks"=>$studentmark]);
    }

    /**
     * Update the specified student details in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function marksupdate(Request $request, $id)
    {
        $studentmarks= new Marks();
        $studentmarks->name=$request->studentname;
        $studentmarks->maths=$request->mathss;
        $studentmarks->science=$request->science;
        $studentmarks->history=$request->history;
        $studentmarks->term=$request->termselect;
        $studentmarks->total_marks='';
        $studentmarks->save();
        $studentmark=Marks::all();
        return view("student.marksindex",["marks"=>$studentmark]);
    }

    /**
     * Remove the specified student record from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function marksdestroy($id)
    {
        $studentmarks=Marks::find($id);
        $studentmarks->delete();
        $studentmark=Marks::all();
        return view("student.marksindex",["marks"=>$studentmark]);
    }
    
}
