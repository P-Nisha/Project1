<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
<script src="https://kit.fontawesome.com/44f1fd7011.js" crossorigin="anonymous"></script>
<div class="col-md-12">
<div class="container">
 
  <div class="row">
    
      <div class="col-md-12">
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
    
      <div class="col-md-4">  <h1>Registration Form</h1>
<form action="{{url('register')}}" class="form-group" method="post">
  @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" name="name" id="form3Example1" class="form-control" />
          <label class="form-label" for="form3Example1">Name</label>
          @error('name')
          {{$message}}
          @enderror
        </div>
      </div>
     
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" name="email" id="form3Example3" class="form-control" />
      <label class="form-label" for="form3Example3">Email address</label>
      @error('email')
      {{$message}}
      @enderror
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="password" id="form3Example4" class="form-control" />
      <label class="form-label" for="form3Example4">Password</label>
      @error('password')
      {{$message}}
      @enderror
    </div>
    <div class="form-outline mb-4">
      <input type="password" name="password_confirmation" id="form3Example4" class="form-control" />
      <label class="form-label" for="form3Example4">Confrim Password</label>

    </div>
  
    <!-- Checkbox -->
   
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
   

    <!-- Register buttons -->
    <div class="text-center">
      <p>or sign up with:</p>
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>
  
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>
  
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>
  
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </form>