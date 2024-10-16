@extends('main-site')
@section('main-site')
<section>
  <div class="d-flex align-items-center bg-light" style="height: 750px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{route('signupPush')}}" method="POST">
                @csrf

                <div class="form-group mb-4">
                  <label for="form3Example1cg">Your Name</label>
                  <input type="text" name="name" id="form3Example1cg" class=" @error('name') is-invalid @enderror form-control form-control-lg" />
                  @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                </div>

                <div class="form-group mb-4">
                  <label for="form3Example3cg">Your Email</label>
                  <input type="text" name="email" id="form3Example3cg" class=" @error('email') is-invalid @enderror form-control form-control-lg" />
                  @error('email')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                </div>

                <div class="form-group mb-4">
                  <label for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class=" @error('password') is-invalid @enderror form-control form-control-lg" />
                  @error('password')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                </div>

                <div class="form-group mb-4">
                  <label for="form3Example4cdg">Repeat your password</label>
                  <input type="password" name="password_confirmation" id="form3Example4cdg" class=" @error('password_confirmation') is-invalid @enderror form-control form-control-lg" />
                  @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="{{route('login')}}" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection