<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="/login" method="post">
    @csrf
    Email <input type="email" name="email"> <br>
    Password <input type="password" name="password"> <br>
    <button type="submit">Login</button>
    </form>

    @if(session('creado') == true)
        <b>Usuario creado.</b>
    @endif
    @if(session('failed') == true)
        <b>Credenciales invalidas.</b>
    @endif

    @if(session('logout') == true)
        <b>Sesión cerrada.</b>
    @endif
</body>
</html>