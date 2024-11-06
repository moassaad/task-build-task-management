@extends('layout.app')

@section('title_page', env('APP_NAME'))

@section('content')
<div class="container px-4">
  <div class="row">
    <div class="col">
      <h1 class="text-center p-4">Update Task</h1>
    </div>
  </div>
  <div class="row gx-5 bg-body-tertiary">
    @error('error')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
    @enderror
    <div class="col bg-body-tertiary p-5">
      <form method="POST" action="{{route('task.update',$task)}}" class="row g-3">
        @method('PUT')
        @csrf
        <div class="col-12">
          <label for="inputTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="inputTitle" name="title" value="{{$task->title}}">
        </div>
        <div class="col-md-12">
          <label for="inputDescription" class="form-label">Description</label>
          <input type="text" class="form-control" id="inputDescription" name="description" value="{{$task->description}}">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="completion" @checked($task->completion) value="1">
            <label class="form-check-label" for="gridCheck">
              completion
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
