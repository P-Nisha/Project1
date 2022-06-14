@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="col-=md-12 "><i class="fa fa-user"></i>Add Course</h1>

        @if(Session::has('success'))
        <div class="alert alert-success d-flex" id="success">
            {{Session::get('success')}}
           
        </div>
        @endif
        
        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
        @endif
    </div>

   
    <div class="col-md-12"></div>
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="cname" > Name</label>
                    <select name="name" id="" class="form-control select2Dropdown">
                        <option selected dosabled> Choose Course</option>
                      
                        <option value="Php">
                           @if(old('course')=='Php')
                           {{'selected'}}
                           @endif Php</option>

                           
                            
                        <option value="Data Structure">
                            @if(old('course')=='Data Structure')
                            {{'selected'}}
                            @endif Data Structure</option>
 
                        <option value="Python">
                                @if(old('course')=='Python')
                                {{'selected'}}
                                @endif Python </option>

                                 
                        <option value="Java">
                            @if(old('course')=='Java')
                            {{'selected'}}
                            @endif Java </option>
 
                        <option value="C++">
                                @if(old('course')=='C++')
                                {{'selected'}}
                                @endif C++ </option>
                    </select>
      
                    <a style="color:red">
                        @error('name')
                        {{$message}}
                        @enderror
                    </a>
                </div>
            </div><hr>
            
        
            <div class="col-md-12">
                <div class="form-group">
                <label for=""> Price </label>
                   <input type="text"class="form-control" name="price" >
                   <a style="color:red">
                    @error('duration')
                    {{$message}}
                    @enderror
                    </a>
                </div>
            </div>

            <div class="col-md-12">
            <div class="form-group">
          
                <label for="" > Duration</label>
                    <input type="text" class="form-control" name="duration" >
                    <a style="color:red">
                        @error('price')
                        {{$message}}
                        @enderror
                        </a>
            </div>
            </div>
           
                
                        <button class="btn btn-info">Submit</button>
               
                    </form>
               
                </div>
                </div>
                @endsection
                























   