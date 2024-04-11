<x-layouts.main>
  <div class="container vh-100">
      <div class="row h-100 justify-content-center align-items-center">
          <div class="col-12 col-md-6 col-xl-4">
              
              <form method="POST" action="{{route('login')}}" class="text-center">
                  @csrf
                  <i class="fs-3 text-primary bi bi-twitter"></i>

                  <h1 class="h3 mb-3 fw-normal">Please sing-in</h1>
              
                  <div class="form-floating">
                      <input type="email" name="email" class="form-control mb-3" id="email" placeholder="name@example.com">
                      <label for="floatingInput">Email</label>
                    </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
              
                  <button class="btn btn-primary w-100 py-2 mt-5" type="submit">Sign in</button>
                  <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
                </form>
          </div>
      </div>
  </div>
</x-layouts.main>