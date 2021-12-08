<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Home</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h3>Laravel | Contacts</h3>
        </div>
        <div class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/contact-return">Contatos</a></li>
            <li><a href="/novocontato">Novo Contato</a></li>
        </div>
    </header>

    @yield('content')

    <footer>
        <p>&copy;2021, JackelineEstudante | Todos os direitos reservados.</p>
    </footer>
</body>
</html>