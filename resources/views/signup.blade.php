<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
</head>
<body>
    <h1>SIGN UP</h1>
    <form action="/register" method="post">
    @csrf
    Name <input type="text" name="name"> <br>
    Email <input type="email" name="email"> <br>
    Password <input type="password" name="password"> <br>
    Tipo 

    <select name="tipo">
        <option value="1">Basico</option>
        <option value="2">Avanzado</option>
    </select> 
    <br>
    <button type="submit">Sign Up</button>
    </form>
</body>
</html>