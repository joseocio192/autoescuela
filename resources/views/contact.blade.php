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
        <div class="boxContent">
            <h1>Contáctenos</h1>
            <p>Contáctenos para conocer detalles sobre nuestros cursos.</p>
            <p>Dirección:
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.209302905837!2d-107.39810839365003!3d24.822514907789895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcdbbc39ddf7a1%3A0x48230631604cf1c9!2sCuatro%20R%C3%ADos!5e0!3m2!1ses-419!2smx!4v1725865814343!5m2!1ses-419!2smx"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p>Teléfono: 6671689453, 6673484643</p>
            <p>E-mail: <a href="mailto:autoescuela_culiacan@hotmail.com">autoescuela_culiacan@hotmail.com</a></p>
        </div>
</body>

</html>