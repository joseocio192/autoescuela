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
        <h1>Nuestra Autoescuela</h1>
        <p>Somos una autoescuela que lleva más de 14 años entrenando y certificando conductores profesionales,
            desarrollando en ellos habilidades esenciales en el ejercicio de la conducción, y haciendo un fuerte énfasis
            en prevención, seguridad y buenas prácticas.</p>
        <h1>Nuestro Objetivo</h1>
        <p>Nuestra misión es formar conductores integrales y responsables, impartiendo técnicas de conducción, enseñando
            normas y comportamientos de seguridad vial, y trabajando en prevención con entrenamiento en primeros
            auxilios y mecánica automotriz básica y avanzada.</p>
        <p>Contáctenos para poder ofrecerle información más detallada sobre
            nuestros precios y metodología de enseñanza.</p>
</body>
</html>
