<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">{{env('APP_NAME')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            @auth
              <li class="nav-item">
                <a class="nav-link" href="{{route('task.index')}}">Tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
              </li>
            @endauth
          </ul>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @if (!auth()->check())
            <li class="nav-item">
                <a href="{{route('register')}}" class="btn btn-outline-success">Register</a>
                <a href="{{route('login')}}" class="btn btn-outline-success">Login</a>
            </li>
          @endif
          @auth
            <li class="nav-item">
                <p class="nav-link">{{auth()->user()->name}}</p>
            </li>
          @endauth
        </ul>
      </div>
    </nav>