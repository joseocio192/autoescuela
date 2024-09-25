<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoescuela</title>
</head>

<body style="background-color: rgb(17 24 39);">
    <livewire:navbar.navbar>
        <div class="container">
            <h1>Bienvenidos a Autoescuela</h1>
            <p>Tu camino hacia una conducción segura comienza aquí.</p>
            <p>En Autoescuela, ofrecemos cursos de manejo para todos los niveles. Nuestros instructores certificados te ayudarán a adquirir las habilidades necesarias para conducir con confianza y seguridad.</p>
            <h2>Nuestros Servicios</h2>
            <ul>
                <li>Clases de manejo para principiantes</li>
                <li>Clases de manejo avanzado</li>
                <li>Preparación para el examen de conducir</li>
                <li>Clases de manejo defensivo</li>
            </ul>
            <h2>Ubicación</h2>
            <p>Visítanos en nuestra sede principal:</p>
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.209302905837!2d-107.39810839365003!3d24.822514907789895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcdbbc39ddf7a1%3A0x48230631604cf1c9!2sCuatro%20R%C3%ADos!5e0!3m2!1ses-419!2smx!4v1725865814343!5m2!1ses-419!2smx"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <h2 href="{{ route('contact') }}" wire:navigate>Contacto</h2>
        </div>
</body>

</html>
