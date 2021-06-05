@extends('base')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    <div class="container">
        <br>
        <h1 class="text-primary text-center">Login Page</h1>
        <br>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="/login/google" class="btn btn-primary">Login As Google</a>
                    <a href="/login/github" class="btn btn-primary">Login As Github</a>
                    <a href="/login/facebook" class="btn btn-primary">Login As Facebook</a>
                </form>
            </div>
        </div>
    </div>
@endsection
