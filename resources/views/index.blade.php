<ul>
    <li><a href="/">Inicio</a></li>
    <li><a href="/privado">Privado</a></li>
</ul>
@if(Auth::check())
    Holi, {{ Auth::user() -> name }} <br>

    <a href="/logout">Logout</a>
@else 
    Holi. <a href="/login">Iniciar sesión</a>
@endif
