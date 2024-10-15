@extends('main-site')
@section('main-site')
<section>
  <div class="d-flex align-items-center bg-light" style="height: 600px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Log In an account</h2>

              <form>

                <div class="form-group mb-4">
                  <label for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-group mb-4">
                  <label for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-success btn-block btn-lg">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Not a member?  <a href="#!" class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection