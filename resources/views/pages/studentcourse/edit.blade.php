@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2"><i class="fa fa-user"></i> Edit Student Course</h1>
          
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
            <form action="{{url('edit-studentcourse/'.$studentCourseData->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cname"> Name </label>
                            <select name="name" id="" class="form-control select2Dropdown">
                                
                                <option value="">
                                    @if(old('course')=='')
                                    {{'selected'}}
                                    @endif </option>
         
                                <option >

                                    

                                <label for="cname">Course </label>
                                <select name="name" id="" class="form-control select2Dropdown">
                                    <option selected disabled>Select Course</option>
                                    <option> 
                                
                               
                                     <a style="color:red;">
                                        @error('cname')
                                            {{ $message }}
                                        @enderror
                                    </a>
                        </div> 
                </div>
        </div>
        <button class="btn btn-info">Update StudentCourse</button>

    </form>
</div>

</div>
@endsection

                               
                                  
                   
                   

                      
             
                  

               