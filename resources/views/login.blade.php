@extends('master') 
@section("content")
<div class="container custom-login">
  <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <form action='login' method='post'>
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1"  name='email' aria-describedby="emailHelp" placeholder="Enter email">
            
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="text" class="form-control" name='passWord' id="exampleInputPassword1" placeholder="Password">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
  </div>
 
</div>

@stop