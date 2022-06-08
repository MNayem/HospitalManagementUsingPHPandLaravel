<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('adminHome')

@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }
    .card-registration .select-arrow {
    top: 13px;
    }
</style>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-4 d-none d-xl-block">
              <img
                src="{{URL::asset('/images/d6.jpg')}}"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-8">
              <div class="card-body p-md-5 text-black">
                <form class="form-control" method="post" action="/adddoctor" enctype="multipart/form-data">
                  @csrf
                <h3 class="mb-5 text-uppercase" style="text-align: center;">Doctor Registration Form</h3><hr>

                <div class="row">
                  <div class="form-outline mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">Name</label>
                      <input type="text" name="name"placeholder="Enter Name" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-outline mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m1">Address</label>
                      <input type="text" name="address" placeholder="Enter Address" id="form3Example1m1" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="form-label" for="form3Example1m">Gender</label>
                    <select class="form-select" aria-label="Default select example" name="gender" id="form3Example1m">
                      <option value="" selected hidden>Choose Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">Phone Number</label>
                      <input type="text" name="mobile" placeholder="Enter Phone Number" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">Email ID</label>
                      <input type="text" name="demail" placeholder="Enter Email ID" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label class="form-label" for="form3Example1m">Specialization</label>
                    <select class="form-select" aria-label="Default select example" name="specialization" id="form3Example1m">
                      <option value="" selected hidden>Choose Specialization</option>
                      <option value="Medicine">Medicine</option>
                      <option value="Heart">Heart</option>
                      <option value="Cardiology">Cardiology</option>
                      <option value="Skin and Sexual">Skin and Sexual</option>
                      <option value="Dentist">Dentist</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">Date of Birth</label>
                  <input type="date" name="dob" id="form3Example9" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">Choose Image</label>
                  <input type="file" name="image" id="form3Example9" class="form-control form-control-lg" />
                </div>


                <div class="d-flex justify-content-end pt-3">
                  <button class="btn btn-primary mt-2 col-md-4 col-sm-6" type="submit" name="submit">
                    Confirm Registration
                  </button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
