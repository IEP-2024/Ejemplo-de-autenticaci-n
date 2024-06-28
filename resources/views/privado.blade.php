@if( Auth::user() -> tipo() -> first() -> nombre == "Basico")
    Vos sos basico 
@else 
    Vos sos groso
@endif
