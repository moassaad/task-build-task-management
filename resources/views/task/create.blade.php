@extends('layout.app')

@section('title_page', env('APP_NAME'))

@section('content')
<div class="container px-4">
  <div class="row">
    <div class="col">
      <h1 class="text-center p-4">Create New Task</h1>
    </div>
  </div>
  <div class="row gx-5 bg-body-tertiary">
    
    @error('error')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
    @enderror
    <div class="col bg-body-tertiary p-5">
      <form method="POST" action="{{route('task.store')}}" class="row g-3">
        @csrf
        <div class="col-12">
          <label for="inputTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="inputTitle" name="title" value="{{old('title')}}">
        </div>
        @error('title')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="col-md-12">
          <label for="inputDescription" class="form-label">Description</label>
          <input type="text" class="form-control" id="inputDescription" name="description" value="{{old('description')}}">
        </div>
        @error('description')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="col-12">
          <div class="form-check">
            {{-- <input type="hidden" id="gridCheck" name="completion" value="0"> --}}
            <input class="form-check-input" type="checkbox" id="gridCheck" name="completion" value="1" >
            <label class="form-check-label" for="gridCheck">
              completion
            </label>
          </div>
        </div>
        @error('completion')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
