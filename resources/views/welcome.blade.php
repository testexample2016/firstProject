@extends('layouts.master')

@section('title')

  Welcome!

@endsection


@section('content')

 @if(count($errors)>0)

<div class="row">

    <div class="col-md-4 offset-md-4">

        <ul>
            
            @foreach($errors->all() as $error)

              <li>{{ $error }}</li>

              @endforeach

        </ul>
        
    </div>

</div>

@endif

  <div class="row">
    <div class="col-md-6">

         <h3>Sign Up</h3>

        <form action="{{ route('signup') }}" method="post">

            <div class="form-group ">
                <label for="email">Your E-Mail</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" required>
                
            </div>

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}" required>
                
            </div>

            <div class="form-group">
                <label for="password">Your Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}" required>
                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

             @csrf

        </form>
    </div>


        <div class="col-md-6">

            <h3>Sign In</h3>

        <form action="{{ route('signin') }}" method="post">

            <div class="form-group">
                <label for="email">Your E-Mail</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" required>
                
            </div>

           
            <div class="form-group">
                <label for="password">Your Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('email') }}" required>
                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            @csrf

        </form>
    </div>
  </div>

@endsection