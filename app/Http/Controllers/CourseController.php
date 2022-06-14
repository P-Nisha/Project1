<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    public function index(){
        $courseData = Course::all();
        return view('pages.course.index',[
            'courseData' => $courseData
        ]);
    }

    public function create (Request $request){
        if($request->isMethod('get')){
            return view('pages.course.add');
        }
        if($request->isMethod('post')){
           $request ->validate([
               'name'=>'required', 'max:255',
               'price'=>'required' ,'max:255',
               'duration'=>'required' , 'max:255',
           ]);
           
          
          if(course::create($request->all())){
            return redirect()-> back() -> with ('success', 'Data  Inserted Successfully.');
            return redirect()->back()->with('error','data couldnot be inserted');
          }
        }
    }  
        
    

    public function edit(Request $request){
        if($request->isMethod('get')){
            $singleCourseData = course::findOrFail($id);
            return view('pages.course.edit',[
                'courseData' => $singleCourseData
            ]);
        }
            
            if($request->isMethod('post')){
                $data = Course::findOrFail($id);
                $data->update($request->all());
            return redirect('display-course')->with('success','Data updated successfully.');
            }
        }

    public function destroy($id){
        course::findOrFail($id)->delete();
        return redirect()->back()->with('success','Data deleted successfully');
}

    public function toggleStatus(Request $request){ 
        
        if($request->isMethod('post')){
            if($request->submit == 'active'){
               
             $data = course::findOrfail($request->cid);
             $data->status = 0;
             $data->update();
             return redirect()->back()->with('success','Status updated successfully.');
            }elseif($request->submit == 'inactive'){
               
             $data =course::findOrfail($request->cid); 
             $data->status = 1;
             $data->update();
             return redirect()->back()->with('success','Status updated successfully.');
            }
}
}
}