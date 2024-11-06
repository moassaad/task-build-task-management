@extends('layout.app')

@section('title_page', env('APP_NAME'))

@section('content')
<div class="container px-4">
  <div class="row">
    <div class="col">
      <h1 class="text-center p-4">Tasks</h1>
    </div>
  </div>
  <div class="col p-5">
    <a class="btn btn-primary" href="{{route('task.create')}}">New Task</a>
    @if(session('success'))
      <div class="alert alert-success m-1" role="alert">
        {{session('success')}}
      </div>
    @endif
  </div>
  <div class="row gx-5 bg-body-tertiary">
    <div class="col bg-body-tertiary p-5">
      @if(!empty($tasks->all()))
        <table class="table">
          <thead>
            <tr>
              <th class="col-md-1" scope="col-md-1">#</th>
              <th class="col-md-3" scope="col-md-2">Title</th>
              <th class="col-md-4" scope="col-5">Description</th>
              <th class="col-md-2" scope="col-2">Completion</th>
              <th class="col-md-2" scope="col-2">Actions</th>
            </tr>
          </thead>
          <tbody>
              <?php $count = 1;?>
              @foreach ($tasks as $task)
                <tr>
                  <th class="p-3">{{$count}}</th>
                  <td class="p-3">{{$task->title}}</td>
                  <td class="p-3">{{$task->description}}</td>
                  <td class="text-center">
                    <p type="submit" class="p-2 m-1">
                      @if ($task->completion)
                        <i class="fa-regular fa-square-check"></i>
                      @else
                        <i class="fa-regular fa-square"></i>
                      @endif
                    </p>
                  </td>
                  <td>
                    <a href="{{route('task.edit',$task)}}" class="inline btn m-1">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <form method="POST" action="{{route('task.destroy',$task)}}" class="row g-3">
                      <div class="col">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn m-1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                      </div>
                    </form>
                    {{-- <a href="{{route('task.delete.post',$task->id)}}" class="inline m-1">
                      <i class="fa-solid fa-trash"></i>
                    </a> --}}
                  </td>
                </tr>
                <?php $count++;?>
              @endforeach
          </tbody>
        </table>
      @else
        <h3>No Tasks</h3>
      @endif
    </div>
  </div>
</div>

@endsection
