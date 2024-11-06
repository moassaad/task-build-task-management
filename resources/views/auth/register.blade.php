@extends('layout.app')

@section('title_page', env('APP_NAME'))

@section('content')
<div class="container px-4">
  <div class="row">
    <div class="col">
      <h1 class="text-center p-4">Register</h1>
    </div>
  </div>
  <div class="row gx-5 bg-body-tertiary">
    <div class="col bg-body-tertiary p-5">
      <form method="POST" action="{{route('register.post')}}" class="row g-3">
        @csrf
        <div class="col-12">
          <label for="inputName" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputName" name="name" value="{{old('name')}}">
        </div>
        @error('name')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" value="{{old('email')}}">
        </div>
        @error('email')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password" value="{{old('password')}}">
        </div>
        @error('password')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
