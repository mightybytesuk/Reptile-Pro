@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
              </div>
              <div class="mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name='description' placeholder='Description' rows="3"></textarea>
              </div>
              <div class="mb-2">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="price">
              </div>
              <div class="mb-2">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>
              <div class="mb-2">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
              </div>
              <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
              </div>
              <div class="mb-2">
                <label for="title" class="form-label">Genetics</label>
                <input type="text" class="form-control" id="morph" name="morph" placeholder="Genetics">
              </div>
              <div class="mb-2">
                <label for="title" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="age">
              </div>
              @csrf
              <center>
                <input type="submit" value="Add" class="btn btn-success">
              </center>
        </form>
    </div>

@endsection