@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 style="text-align: center;">Your Profile Credentials </h1>
        <hr>
        <div class=" ">
            <img src="uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;background-size: contain;">
            <h2>{{ $user->firstname }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br>
                    <input type="submit" class="float-left btn btn-sm btn-primary">
               
            </form>
                <hr style="width:300px; text-align: center;">
                <br>
                <div class="card" style="background-color:; ">
                <h2>Email Address:         {{ $user->email}}</h2>
                <hr>
                <h2>Telephone Number:      {{ $user->telephone}} </h2>
                <hr>
                <h2>Applied University:    {{ $user->applieduni}}</h2>
                <hr>
                <h2>Major:                 {{ $user->major}}</h2>
                <hr>
                <h2>Date of Birth:         {{ $user->dob}}</h2>
                
                
        
    </div>
        </div>
    </div>

    
        
  

</div>
@endsection