<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$title}}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/styles/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 mx-auto mt-5">
          <div class="card">
            <div class="card-body">
              <div class="row d-flex align-items-center mt-3 mb-5">
                <div class="col-lg">
                  <h5 class="fw-bold fs-2">Ubah Password</h5>
                </div>
              </div>
              <div class="row">
                <form method="POST" action="{{route('password.post')}}">
                  @if (session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                  @endif
                  @if ($errors->any())
                      @foreach ($errors->all() as $err)
                          <p class="alert alert-danger">{{ $err }}</p>
                      @endforeach
                  @endif
                  @csrf
                  <div class="mb-3">
                    <label class="form-label fw-bold text-secondary"
                      >Old Password</label
                    >
                    <input type="password" class="form-control" name="old_password" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold text-secondary"
                      >New Password</label
                    >
                    <input type="password" class="form-control mb-3" name="new_password"  />
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">New Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password_confirmation" />
                  </div>
                  <button type="submit" class="btn btn-success w-full">
                    Masuk
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
