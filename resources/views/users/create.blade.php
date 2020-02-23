@extends('common.static')

@section('containerContent')

    <div>
        <H2>New User? Register Here...</H2>
    </div>
    <form action="{{url('/user')}}" method="POST" onsubmit="return validate();" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="pass1">Password</label>
            <input type="password" class="form-control" name="pass1" id="pass1">
        </div>
        
        <div class="form-group">
            <label for="pass">Confirm Password</label>
            <input type="password" class="form-control" name="pass" id="pass">
        </div>

        <div class="form-group">
            <label for="mobile">Mobile No.</label>
            <input type="number" class="form-control" name="mobile" id="number" maxlength="11">
        </div>

        <div class="form-group">
            <label for="mobile">Profile Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register">
        </div>
    </form>

    @include('common.errorMessage')

@endsection