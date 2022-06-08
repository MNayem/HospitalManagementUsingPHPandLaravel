<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 @extends('adminHome')

@section('content')

@if(session()->has('message1'))
    <div class="alert alert-success">
        {{ session()->get('message1') }}
    </div>
@endif

@if(session()->has('message2'))
    <div class="alert alert-success">
        {{ session()->get('message2') }}
    </div>
@endif

<table class="table table-bordered table-dark">
  <thead>
  <th colspan="10"><h2 style="text-align: center; color: yellow;"> All Confirmed Appoinment So Far...</h2></th>
    <tr align="center" style="color: #BB2D3B;">
      <th scope="col">Serial No.</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Address</th>
      <th scope="col">Appoinment Date</th>
      <th scope="col">Status</th>
      <th colspan="3" scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
       @foreach ($confirmedappoinmentshow as $confirmedappoinmentshow)
    <tr align="center">
      <th scope="row">{{ $confirmedappoinmentshow->id }}</th>
      <td>{{ $confirmedappoinmentshow->name }}</td>
      <td>{{ $confirmedappoinmentshow->pemail }}</td>
      <td>{{ $confirmedappoinmentshow->mobile }}</td>
      <td>{{ $confirmedappoinmentshow->address }}</td>
      <td>{{ $confirmedappoinmentshow->date }}</td>
      <td>{{ $confirmedappoinmentshow->status }}</td>
      <td colspan="3">
            <a href="{{ url('/confirmedappoinmentedit',$confirmedappoinmentshow->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Edit </a>
            <a href="{{ url('/deleteconfirmedappoinment',$confirmedappoinmentshow->id) }}" class="btn btn-danger ml-2"><i class="fas fa-trash"></i>&nbsp;Delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
