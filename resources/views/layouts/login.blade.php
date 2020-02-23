@extends('common.static')

@section('containerContent')

    <div>
        <H2>Login to Continue</H2>
    </div>
     <form action="create" method="">

        <!-- {{ csrf_field() }} -->

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>

    @include('common.errorMessage')

@endsection