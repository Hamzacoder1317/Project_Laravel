@extends('welcome')
@section('content')
<div class="container w-50 mt-4">

  <h2 class="text-light text-center mb-3">ADD CATEGORY</h2>
  <form action="/addcatg" method="POST">
  @csrf
  <input type="text" class="form-control mb-3" name="catg_name" placeholder="Enter Category Name..">
  <button type="submit" class="btn btn-primary d-flex m-auto">SUBMIT</button>
  </form>

</div>
@endsection
