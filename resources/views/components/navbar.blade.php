<nav class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <a href="{{route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <i class="fs-3 text-primary bi bi-twitter"></i>

        </a>

        <div class="text-end">
          @auth
          <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="btn btn-outline-danger me-2">Logout</button>
          </form>
          @endauth
          @guest
          
          <a href="{{route('login')}}" class="btn btn-outline-primary">Login</a>
          <a href="{{route('register')}}" class="btn btn-outline-primary">Sign-up</a> 
          @endguest
          
        </div>
      </div>
    </div>
</nav>