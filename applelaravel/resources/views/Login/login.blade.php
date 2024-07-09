
@extends('login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 login-container">
            <h2 class="text-center mb-4">Login</h2>
            <form  method="POST" action="{{ route('login.post') }}">
            @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block" style="background-color: black;">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection