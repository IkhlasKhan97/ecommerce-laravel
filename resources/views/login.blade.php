@extends('master')
@section("content")
 
 <div class="container custom-login">
      <div class="row d-flex justify-content-center">
            <div class="col-sm-4 col-md-4 col-xl-4 col-4">
            <form action = "login" method = "POST"> 
           
  <div class="mb-3">
           @csrf 
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" name = "password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
            </div>      
      </div>
 </div>
@endsection