<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function joins()
    {
        // echo"hello";
        // die;
        $student=Student::join('student_sum' ,'students.id','student_sum.id')->get();
    
        return response()->json(['status'=>200,'data'=>$student],200);
        
    }

    public function leftjoin()
    {
        $student=Student::leftJoin('student_sum' ,'students.id','student_sum.id')->get();

        return response()->json(['status'=>200,'data'=>$student],200);
    }


    

    public function index()
    {
       $student=Student::all();
      
       return response()->json(['status'=>200,'data'=>$student],200);
    }

  
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

  
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            
         
            $student = Student::find($id);
             $student->update($request->all());
            $student->save();
          //  print_r($request);
       
        return response()->json(['status'=>200,'data'=>$student],200);
        

    }

  
    public function deletedata($id)
    {
        $student=Student::where('id', $id)->delete();
        return response()->json(['status'=>200,'data'=>$student],200);
          
    }
}
