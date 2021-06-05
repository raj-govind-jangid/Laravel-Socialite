@extends('base')

@section('title')
    <title>Register</title>
@endsection

@section('content')
    <div class="container">
        <br>
        <h1 class="text-primary text-center">Register Page</h1>
        <br>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="/login/google" class="btn btn-primary">Login As Google</a>
                    <a href="/login/github" class="btn btn-primary">Login As Github</a>
                    <a href="/login/facebook" class="btn btn-primary">Login As Facebook</a>
                </form>
            </div>
        </div>
    </div>
@endsection
