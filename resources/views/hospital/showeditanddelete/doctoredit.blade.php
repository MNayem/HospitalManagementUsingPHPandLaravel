<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


@extends('adminHome')

@section('content')
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
    #sub {
      display: block;
      width: 100%;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 5px;
      color: #333
    }

    #sub:focus {
      outline: none
    }
</style>
<center><h1>Edit This Confirmed Appoinment Patient Information</h1><br></center>
            <hr>
        <div class="wrapper rounded bg-white">
            <form action="{{ url('/doctoreditprocess',$data->id) }}" method="post" class="form-control">
                @csrf
                <label style="font-weight: bold;">Name: </label>
                <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" ><br><br>

                <label style="font-weight: bold;">Address: </label>
                <input type="text" name="address" placeholder="Address" value="{{ $data->address }}" ><br><br>

                <label style="font-weight: bold;">Gender: </label>
                <div class="col-md-6 mb-4">
                    <select id="sub" name="gender" required>
                      <option value="{{ $data->gender }}" selected hidden>{{ $data->gender }}</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                  </div><br><br>

                <label style="font-weight: bold;">Phone No: </label>
                <input type="text" name="mobile" placeholder="Phone No." value="{{ $data->mobile }}" ><br><br>

                <label style="font-weight: bold;">Email ID: </label>
                <input type="text" name="demail" placeholder="Email ID" value="{{ $data->demail }}" ><br><br>

                <label style="font-weight: bold;">Specialization: </label>
                <div class="col-md-6 mb-4">
                    <select id="sub" name="specialization" required>
                      <option value="{{ $data->specialization }}" selected hidden>{{ $data->specialization }}</option>
                      <option value="Medicine">Medicine</option>
                      <option value="Heart">Heart</option>
                      <option value="Cardiology">Cardiology</option>
                      <option value="Skin and Sexual">Skin and Sexual</option>
                      <option value="Dentist">Dentist</option>
                    </select>
                  </div><br><br>

                <label style="font-weight: bold;">Date of birth: </label>
                <input type="date" name="dob" placeholder="Date of birth" value="{{ $data->dob }}" ><br><br>


                <input type="submit" class="btn btn-info" value="Update Info" name="submit">
            </form>
        </div>

@endsection
