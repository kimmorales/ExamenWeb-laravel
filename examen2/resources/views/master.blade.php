<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen 2 - @yield('title')</title>

        <!-- Fonts -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" href="/js/bootstrap.min.css"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h1>Examen 2</h1>
      </div>
      <div class="col-md-7">
        <div class="btn-group">
          <a href="{{url('/clientes')}}" class="btn btn-primary btn-lg">Clientes</a>
          <a href="{{url('/productos')}}" class="btn btn-primary btn-lg">Productos</a>
          <a href="{{url('/inventario')}}" class="btn btn-primary btn-lg">Inventario</a>
          <a href="{{url('/')}}" class="btn btn-primary btn-lg">Facturación</a>
          <a href="{{url('/usuarios')}}" class="btn btn-primary btn-lg">Facturación</a>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @yield('content')
      </div>
    </div>
  </div>


<footer>
     <div class="container">
    <div class="row">
      <div class="col-md-12">
    <hr/>
        <p>&copy; Copyright <?php echo date('Y'); ?>.</p>
        </div>
    </div>
  </div>
</footer>
</body>
</html>
