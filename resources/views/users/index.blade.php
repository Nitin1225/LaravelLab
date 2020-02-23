@extends('common.static')

@section('containerContent')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">User Account</div>
            <div class="card-body">
                <div class="col-md-6 offset-md-4">
                    <form method="GET" action="{{url('user/create')}}">
                        <input type="submit" name="action" class="btn btn-success" value="Login">
                        <input type="submit" name="action" class="btn btn-primary" value="Register">
                        <!-- <button type="submit" formaction="{{url('user/create')}}" class="btn btn-success">Login</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <input type="submit" formaction="{{url('user/create')}}" class="btn btn-success" value="Login">
                        <input type="submit" class="btn btn-primary" value="Register"> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
