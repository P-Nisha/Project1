

@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2"><i class="fa fa-user"></i> Add Student</h1>

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

   
        <div class="col-md-12" >
            <form action="" method="post">
               @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input id="fname" class="form-control" name="fname" value="{{old('fname')}}">

                            <a style="color:red">
                                @error('fname')
                                {{$message}}
                                @enderror
                            </a>
                        </div>


                            
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input type="text" class="form-control" name="mname" value=" {{old('mname')}}">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lname"  value="{{old('lname')}}">

                            <a style="color:red">
                                @error('lname')
                                {{$message}}
                                @enderror
                             </a>
                        </div>
                    </div>
                </div><hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Gender</label>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="male">
                                    <input type="radio"

                                    @if(old('gender')=='male')
                                    {{'checked'}}
                                    @endif
                                    id="male" name="gender" value="male">
                                    
                                    Male
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="female">
                                    <input type="radio" 
                                    @if(old('gender')=='female')
                                    {{'checked'}}
                                    @endif
                                    id="female" name="gender" value="female">

                                    Female
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="others">
                                    <input type="radio" 
                                    @if(old('gender')=='others')
                                    {{'checked'}}
                                    @endif
                                    id="others" name="gender" value="others">
                                    Others
                                </label>
                            </div>
                           
                        </div>


                    </div>
                    <div class="col-md-8">
                     <div class="form-group">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="city"  value="{{old('city')}}">
                        <a style="color:red">
                            @error('city')
                            {{$message}}
                            @enderror
                        </a>
                     </div>
                    
                    </div>
                </div>
                <hr>
               <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                     <label for="">Country</label>
                     <select name="country" id=""  class="form-control select2Dropdown">
                         <option selected disabled>Choose Country</option>
                         <option value="nepal">
                            @if(old('country')=='Nepal')
                            {{'selected'}}
                            @endif
                            
                            Nepal</option>
                         <option value="china">
                            @if(old('country')=='China')
                            {{'selected'}}
                            @endif
                            China</option>

                         <option value="india">
                            @if(old('country')=='India')
                            {{'selected'}}
                            @endif
                            India</option>

                         <option value="usa">
                            @if(old('country')=='USA')
                            {{'selected'}}
                            @endif
                            
                             USA</option>
                         <option value="uk">
                            @if(old('country')=='UK')
                            {{'selected'}}
                            @endif
                            
                            UK</option>
                            
                     </select>
                     <a style="color:red">
                        @error('country')
                        {{$message}}
                        @enderror
                        </a>
                    </div>
                   
                 </div>
               </div><hr>
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone"  value="{{old('phone')}}">
                        <a style="color:red">
                            @error('phone')
                            {{$message}}
                            @enderror
                            </a>
                       </div>
                       
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email"  value="{{old('email')}}">
                        <a style="color:red">
                            @error('email')
                            {{$message}}
                            @enderror
                            </a>
                       </div>
                      
                    </div>
                   
                </div>
               
                    <button class="btn btn-info">Submit</button>
                
            </form>
        </div>

    </div>
@endsection