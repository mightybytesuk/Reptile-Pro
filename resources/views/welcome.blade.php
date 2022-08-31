@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($animals as $animal)
            <div class="card mx-auto mt-2"  style="width: 18rem;">
                <img src="{{$animal->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$animal->title}}</h5>
                <p class="card-text">
                  Price: {{$animal->price}}<br>
                  Category: {{$animal->category}}<br>
                  Sex: {{$animal->sex}}<br>
                  
                </p>
                  <a href="/reptile/{{$animal->id}}" class="btn btn-primary">View</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection