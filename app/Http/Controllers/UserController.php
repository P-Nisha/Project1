<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
    }
     
        public function add()
        {
            return view('register');
        }
             public function store(Request $request)
             { 
                 $request->validate([
                     'name'=> 'required',
                     'password'=> 'required|min:4|max:12|confirmed'
                 ]);
                 $data['name']= $request->name;
                 $data['email']= $request->email;

                 $data['password']= Hash::make($request->password); //password encryption gareko
                  //$data['password']= sha1('$request->password);
                 
                  User::create($data);
                  return redirect()->back()->with('success','User Created Successfully');
             }
                public function show($id){}
                public function edit($id){}
                public function update(Request $request,$id)
                {

                }
                public function destroy($id){}

                public function login(Request $request){
                    if($request->isMethod('get')){
                        return view('index');
                    }
                    if($request->isMethod('post')){
                      
                        $request->validate([
                            'email' =>'required',
                            'password' =>'required'
                        ]);  
                         if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
                        return redirect('/');
                    }else{
                        return redirect()->back()->with('error','Username or password invalid');
                    }
                    }
                   
                }
    }

