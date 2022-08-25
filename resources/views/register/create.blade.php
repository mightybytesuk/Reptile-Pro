@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="container">
        <form action="" method="post">
            <input type="text" name="name" class="form-control">
            <input type="email" name="email" class="form-control">
            <input type="password" name="password" class="form-control">
            @csrf
            <input type="submit" value="Register">
        </form>
    </div>
@endsection