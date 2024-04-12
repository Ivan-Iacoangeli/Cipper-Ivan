<x-layouts.main>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 mt-5">
                <h1>Home</h1>

                <form class="" method="POST" action="{{route('cip.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="content" class="form-label text-primary fw-bold mt-2">Insert your Cip</label>
                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                      </div>
                      <div class="text-end">
                        <button class="btn btn-outline-primary rounded-pill fw-bold" type="submit">
                            Cip!
                        </button>
                      </div>

                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 mt-5">
              @foreach ($cips as $cip)
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <p class="card-text">{{$cip->content}}</p>
                  <div class="text-end">
                    <a href="#" class="card-link">
                        {{$cip->user->name}}
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
</x-layouts.main>