<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url('css/styletwo.css')}}">
    <title>Home</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h3>Laravel | Contacts</h3>
        </div>
    </header>

    @yield('content')

    <footer>
        <p>&copy;2021, JackelineEstudante | Todos os direitos reservados.</p>
    </footer>
</body>
</html>