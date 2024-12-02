<div class="navbar">
    <a  href="{{ route('landing') }}" wire:navigate.hover><x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/></a>
    <a href="{{ route('landing') }}" wire:navigate.hover>Inicio</a>
    <a href="{{ route('about') }}" wire:navigate.hover>Nuestra escuela</a>
    <a href="{{ route('contact') }}" wire:navigate>Contacto</a>
    <div class="dropdown">
        <button class="dropbtn">Cursos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            @foreach($cursos as $curso)
                <a href="{{ route('curso.show', $curso->id) }}" wire:navigate.hover
                   class="{{ Route::currentRouteName() == 'curso.show' && request()->route('id') == $curso->id ? 'active' : '' }}">
                   {{ $curso->nombre }}
                </a>
            @endforeach
        </div>
    </div>
    @if(Route::currentRouteName() == 'curso.show')
        @php
            $parameters = request()->route()->parameters();
            $secondParameter = $parameters['curso'] ?? 'No second parameter';
            $secondParameter = $cursos->find($secondParameter)->nombre;
        @endphp
        <a class="clase">{{ $secondParameter }}</a>
    @endif

    @auth
        <a href="{{ url('/dashboard') }}" class="split">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="split">Iniciar sesion</a>
        <a href="{{ route('register') }}" class="split_reg">Registrate</a>
    @endauth
</div>
