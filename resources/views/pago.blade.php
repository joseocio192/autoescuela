<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="{{ asset('css/styleDashboard.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Inscripcion</title>
    <style>
        h1,h2 {
            text-align: center;
        }
    </style>
</head>
<body style="background-color: rgb(17 24 39);">
    <livewire:navbar.navbar>
    <div class="container">
        <h1>¡Felicidades! Tu inscripción ha sido exitosa.</h1>
        <p>¡Bienvenido a Autoescuela! Tu camino hacia una conducción segura
            comienza aquí.</p>
        <h2>Detalles de la Inscripción</h2>
        <p>Nombre: {{ $user->name }}</p>
        <p>Curso: {{ $curso->nombre }}</p>
        <p>Costo: ${{ $curso->costo }}</p>
        <p>Fecha de Inscripción: {{ $fecha }}</p>
        <h2>Forma de Pago</h2>
        <p>Por favor, realiza el pago de tu inscripción en la siguiente cuenta:</p>
        <p>Banco: Banco de México</p>
        <p>Número de Cuenta: 1234567890</p>
        <p>Clabe: 0987654321</p>
        <p>Concepto: Inscripción Autoescuela</p>
        <p>Monto: ${{ $curso->costo }}</p>
        <p>Una vez realizado el pago, por favor envía tu comprobante a
        <a href="mailto:joseociom@outlook.com">joseociom@outlook.com</a>.</p>
</body>
</html>

