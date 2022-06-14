<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $studentData = Student::all();
        return view('pages.student.index',[
            'studentData' => $studentData
        ]);
    

  
    }

    public function create(Request  $request){ //$request is a variable of request type
        if($request->isMethod('get')){
               return view('pages.student.add');
        }
        if($request->isMethod('post')){
            // dd($request);
         
            $request-> validate([
                'fname'=> 'required',  'max:20',
                'lname'=>'required',  'max:20',
                'city'=>'required',  'max:50',
                'country'=>'required' , 'max:50',
                'phone'=>'required|unique:students,phone','max:50',
                'email'=>'required|unique:students,email', 'max:50',
        
                
            ]);
            if(Student::add($request->all())){
                return redirect()->back()->with('success','data inserted successfully.');

            }else{
                return redirect()->back()->with('error','data couldnot be inserted');
            }
        }
    }


public function edit(Request $request,$id){
    if($request->isMethod('get')){
        $singleStudentData = Student::findOrFail($id);
        return view('pages.student.edit',[
            'studentData' => $singleStudentData
        ]);
    }
    if($request->isMethod('post')){
        $data = Student::findOrFail($id);
        $data->update($request->all());
    return redirect('display-student')->with('success','Data updated successfully.');

    }
}


    public function destroy($id){
        student::findOrFail($id)->delete();
        return redirect()->back()->with('success','Data deleted successfully');
}
    public function show($id){ 
        $moreData=Student::findOrfail($id);
        return view('pages.student.show',['singleData'=>$moreData]);
    }
    public function toggleStatus(Request $request){
        if($request->isMethod('post')){
           if($request->submit == 'active'){
            $data = Student::findOrfail($request->sid);
            $data->status = 0;
            $data->update();
            return redirect()->back()->with('success','Status updated successfully.');
           }elseif($request->submit == 'inactive'){
            $data = Student::findOrfail($request->sid);
            $data->status = 1;
            $data->update();
            return redirect()->back()->with('success','Status updated successfully.');
           }
        }
    }

}