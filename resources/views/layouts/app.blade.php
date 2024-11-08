<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cadastro de Clientes')</title>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIqF9cnp5+0MsbLZ9Dr6IIRy49ghTQK6tQt9xjvrn/tJdQQj1Ao" crossorigin="anonymous">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container">
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.3/dist/umd/popper.min.js" integrity="sha384-q9y/Fp4IiAYZbvsM+aUROjNBZ7/F/7Lg2+6rEyPYJdM9vQz7WVhxgvF5R5trHWLE" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgEPFtvQ1ylK3z37vd0e6gnt0lVJJa5z53AuKheS2Vzk3jfOgUz" crossorigin="anonymous"></script>
</body>
</html>
