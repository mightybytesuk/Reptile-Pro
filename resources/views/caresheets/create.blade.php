@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            <input type="text" name="title" class="form-control w-50">
            <input type="text" name="scientific" class="form-control w-50">
            <input type="text" name="country" class="form-control w-50">
            <input type="text" name="life_span" class="form-control w-50">
            <input type="text" name="adult_size" class="form-control w-50">
            <input type="text" name="diet" class="form-control w-50">
            <input type="text" name="distribution" class="form-control w-50">
            <input type="text" name="housing" class="form-control w-50">
            <input type="text" name="heating" class="form-control w-50">
            <input type="text" name="uvb" class="form-control w-50">
            <input type="text" name="breeding" class="form-control w-50">
            <input type="text" name="cleaning" class="form-control w-50">
            <input type="submit" value="Add Care Sheet" class="btn btn-primary">

        </form>
    </div>

@endsection