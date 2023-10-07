@extends('welcome')
@section('content')
<div class="container w-50 mt-3">
<h2 class="text-light text-center mb-3">ADD PRODUCTS</h2>
<form action="addprod" method="POST">
  @csrf
  <input type="text" class="form-control mb-2" name="prod_name" placeholder="Enter Product Name..">
  <input type="text" class="form-control mb-2" name="prod_desc" placeholder="Enter Product Description..">
  <input type="number" class="form-control mb-2" name="prod_price" placeholder="Enter Product Price..">
  <select class="form-select" aria-label="Default select example" name="prod_select">
  <option selected>Open this select menu</option>
  @foreach($category as $data)
  <option value="{{$data->category_ID}}">{{$data->category_Name}}</option>
  @endforeach
  </select>
  <button type="submit" class="btn btn-primary d-flex m-auto mt-2">SUBMIT</button>
</form>

</div>
@endsection
