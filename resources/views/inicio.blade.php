@extends('plantilla1')

@section('contenido')
    <p>
        Texto de bienvenida

    </p>
@endsection

@section('pie')
    <ul>
        @guest
            <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
            <li><a href="https://developer.mozilla.org/es/docs/Learn/JavaScript/First_steps/What_is_JavaScript"
                    target="_blank">Javascript</a></li>
            <li><a href="https://laravel.com" target="_blank">Laravel</a></li>
            <li><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
            <li><a href="https://html.spec.whatwg.org/multipage/" target="_blank">HTML</a></li>
        @endguest
        @auth
            {{ Auth::user()->name }}
            <br>
            {{ Auth::user()->email }}
        @endauth
    </ul>
@endsection('pie')
