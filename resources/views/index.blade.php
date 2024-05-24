@if(Auth::check())
    Holi, {{ Auth::user() -> name }} <br>
    <a href="/logout">Logout</a>
@else 
    Holi. <a href="/login">Iniciar sesión</a>
@endif
