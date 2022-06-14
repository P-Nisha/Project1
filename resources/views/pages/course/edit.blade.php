@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2"><i class="fa fa-user"></i> Edit Course</h1>
          
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <form action="{{url('edit-student/'.$studentData->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cname"> Name </label>
                            <select name="name" id="" class="form-control select2Dropdown">
                                <option selected disabled>Choose Course</option>
                                <option 
                                
                                @if ($studentData->course == 'php' )
                                    {{"selected"}}
                                @endif
                                value="php">Php</option>
                           
                               
                                    <option 
                                    
                                    @if ($studentData->course == 'php' )
                                        {{"selected"}}
                                    @endif
                                    value="data Structure">Data Structure</option>
                                   
                                    <option 
                                    
                                    @if ($studentData->course == 'python' )
                                        {{"selected"}}
                                    @endif
                                    value="python">Python</option>
                                   
                                    <option 
                                    
                                    @if ($studentData->course == 'java' )
                                        {{"selected"}}
                                    @endif
                                    value="java">Java</option>
                                   
                                    <option 
                                    
                                    @if ($studentData->course == 'c++' )
                                        {{"selected"}}
                                    @endif
                                    value="c++">C++</option>
                                   
                                    <a style="color:red;">
                                        @error('cname')
                                            {{ $message }}
                                        @enderror
                                    </a>
                        </div> 
                </div>
        </div>
        
                               
                                  
                   
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cname"> Price </label>
                                <input id="cname" type="text" class="form-control" name="price" value="{{$studentData->price}}">
                           
                            <a style="color:red;">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </a>
                            </div> 
    
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cname">Duration </label>
                                    <input id="cname" type="text" class="form-control" name="duration" value="{{$studentData->duration}}">
                               
                                <a style="color:red;">
                                    @error('duration')
                                        {{ $message }}
                                    @enderror
                                </a>
                                </div> 
        
                            </div>
                            </div>
                           


             
                  

                <button class="btn btn-info">Update Course</button>

            </form>
        </div>

    </div>
@endsection
