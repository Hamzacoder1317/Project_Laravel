
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LaravelCRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{Route('category')}}">Add_Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('product')}}">Add_Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('disprod')}}">Display_product</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

</body>
</html>
