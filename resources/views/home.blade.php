<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pizeria</title>
</head>

<body>

    <div class="container">
        <h1 align="center">
            PIZZERIA
        </h1>
    </div>
    <div class="container">
        <table class="table mx-auto">
            <tr>
                <td>
                    <img src="{{URL::asset('/images/usuarios.png')}}" width="200" height="150" alt="usuarios" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR USUARIOS</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/clientes.png')}}" width="200" height="150" alt="clientes" >
                    <br>
                    <a href="" class="btn btn-success">GESTIONAR CLIENTES</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/empleados.png')}}" width="200" height="150" alt="empleados" >
                    <br>
                    <a href="" class="btn btn-danger">GESTIONAR EMPLEADOS</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/pizzas.png')}}" width="200" height="150" alt="pizzas" >
                    <br>
                    <a href="{{ route('pizzas.index') }}" class="btn btn-warning">GESTIONAR PIZZAS</a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{URL::asset('/images/tamanos.png')}}" width="200" height="150" alt="tamaños" >
                    <br>
                    <a href="" class="btn btn-warning">GESTIONAR TAMAÑOS DE PIZZAS</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/ingredientes.png')}}" width="200" height="150" alt="ingredientes" >
                    <br>
                    <a href="" class="btn btn-danger">GESTIONAR INGREDIENTES</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-success">GESTIONAR INGREDIENTES DE PIZZA</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR INGREDIENTES EXTRA</a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{URL::asset('/images/orden.png')}}" width="200" height="150" alt="ordenes" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR ORDENES</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-success">GESTIONAR ORDENES DE PIZZAS</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-danger">GESTIONAR ORDEN INGREDIENTE EXTRA</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/sucursales.png')}}" width="200" height="150" alt="sucursales" >
                    <br>
                    <a href="" class="btn btn-warning">GESTIONAR SUCURSALES</a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR PROVEEDORES</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR MATERIAS PRIMAS</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR COMPRAS</a>
                </td>
                <td>
                    <img src="{{URL::asset('/images/marco.png')}}" width="200" height="150" alt="marco" >
                    <br>
                    <a href="" class="btn btn-primary">GESTIONAR MATERIAS PRIMAS PIZZA</a>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
