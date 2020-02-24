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
                <div>
                    <div align="center">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <td scope="col">ID</td>
                                    <td>Image</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Password</td>
                                    <td>Number</td>
                                </tr>
                            </thead>
                                @foreach ($dbData as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><img src="{{asset($user->imgpath)}}" name="Profile Pic" width="100" height="100" border="0" class="img-circle"></a></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->pass }}</td>
                                        <td>{{ $user->number }}</td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
