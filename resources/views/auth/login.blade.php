@extends('layout.app')

@section('title_page', env('APP_NAME'))

@section('content')
<div class="container px-4">
  <div class="row">
    <div class="col">
      <h1 class="text-center p-4">Login</h1>
    </div>
  </div>
  <div class="row gx-5 bg-body-tertiary">
    @error('error')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
    @enderror
    <div class="col bg-body-tertiary p-5">
      <form method="POST" action="{{route('login.post')}}" class="row g-3">
        <div class="col-md-12">
          @csrf
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
          @error('email')
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
