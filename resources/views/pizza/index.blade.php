<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Pizzas</title>
  </head>
  <body>

  <div class="container">

    <h1>Listado de Pizzas</h1>
    <a href="{{ route('pizzas.create') }}" class="btn btn-success">ADICIONAR PIZZA</a>
    <a href="{{ route('index') }}" class="btn btn-warning">REGRESAR</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">CODIGO</th>
      <th scope="col">PIZZA</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pizzas as $pizza)
    <tr>
      <th scope="row">{{ $pizza->id }}</th>
      <td>{{ $pizza->name }}</td>
      <td>
        <a href="{{ route('pizzas.edit', ['pizza' => $pizza->id]) }}" class="btn btn-info">EDITAR</a>
        <form action=" {{ route('pizzas.destroy', ['pizza' => $pizza->id]) }} " method="POST" style="display: inline-block">
            @method('delete')
            @csrf
            <input class="btn btn-danger" type="submit" value="ELIMINAR">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
