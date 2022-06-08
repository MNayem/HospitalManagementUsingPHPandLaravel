<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


@extends('adminHome')

@section('content')
<style>
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
<center><h1>Edit This Appoinment Patient Information</h1><br></center>
            <hr>
        <div class="wrapper rounded bg-white">
            <form action="{{ url('/appoinmenteditprocess',$data->id) }}" method="post" class="form-control">
                @csrf
                <label style="font-weight: bold;">Name: </label>
                <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" ><br><br>

                <label style="font-weight: bold;">Patient Email: </label>
                <input type="text" name="pemail" placeholder="Patient email" value="{{ $data->pemail }}" ><br><br>

                <label style="font-weight: bold;">Phone No: </label>
                <input type="text" name="mobile" placeholder="Phone No." value="{{ $data->mobile }}" ><br><br>

                <label style="font-weight: bold;">Patient Address: </label>
                <input type="text" name="address" placeholder="Patient Address." value="{{ $data->address }}" ><br><br>

                <label style="font-weight: bold;">Appoinment Date: </label>
                <input type="date" name="date" placeholder="Appoinment Date." value="{{ $data->date }}" ><br><br>

                <label style="font-weight: bold;">Patient Status: </label>
                <div class="col-md-6 mt-md-0 mt-3">
                    <select id="sub" name="status" required>
                      <option value="{{ $data->status }}" selected hidden>{{ $data->status }}</option>
                      <option value="Pending">Pending</option>
                      <option value="Confirmed">Confirmed</option>
                    </select>
                  </div><br><br>

                <input type="submit" class="btn btn-info" value="Update" name="submit">
            </form>
        </div>

@endsection
