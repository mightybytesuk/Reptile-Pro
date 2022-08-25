@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($animals as $animal)
        <tr>
            <th scope="row">{{$animal->id}}</th>
            <td>{{$animal->title}}</td>
            <td>{{$animal->category}}</td>
            <td>{{$animal->sex}}</td>
            <td>
           <a href="">
            <button class="btn btn-danger">
                Delete
            </button>
           </a>
           <a href="">
            <button class="btn btn-success">
                Edit
            </button>
           </a>
            
            </td>
          </tr>
        @endforeach
      
        </tbody>
      </table>
</div>

@endsection