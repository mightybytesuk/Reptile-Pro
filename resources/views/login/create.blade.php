@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="container">
        <form action="" method="post">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="submit" value="Login" class="btn btn-primary mt-2">
            @csrf
        </form>
    </div>
@endsection