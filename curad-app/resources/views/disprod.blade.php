@extends('welcome')
@section('content')

<div class="container mt-4">
    <h2 class="text-center text-light mb-3">Display Products</h2>
<table class="table table-light">
  <thead>
    <tr>
      <th>Prod_Name</th>
      <th>Prod_Desc</th>
      <th>Prod_Price</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>
  @foreach($product as $data)

  <tbody>
    <tr>
      <td>{{$data->pro_Name}}</td>
      <td>{{$data->pro_Desc}}</td>
      <td>{{$data->pro_price}}</td>
      <td>
        <a href="updateprod/{{$data->pro_ID}}" class="btn btn-success">UPDATE</a>
      </td>
      <td>
        <a href="delprod/{{$data->pro_ID}}" class="btn btn-danger">DELETE</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>

@endsection
