<div>
    <table>
        <thead>
            <tr>
                <th>Horas</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody>
            @php
                $horarios = [
                    '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00'
                ];
                $highlightedCells = [];

                // Example input: ['08:00-10:00', '12:00-14:00']
                foreach ($timeSlots as $timeSlot) {
                    if (strpos($timeSlot, '-') !== false) {
                        [$start, $end] = explode('-', $timeSlot);
                        $startIndex = array_search($start, $horarios);
                        $endIndex = array_search($end, $horarios);

                        if ($startIndex !== false && $endIndex !== false) {
                            for ($i = $startIndex; $i < $endIndex; $i++) {
                                $highlightedCells[$i] = true;
                            }
                        }
                    }
                }
            @endphp
            @foreach ($horarios as $index => $hora)
                <tr>
                    <td>{{ $hora }}</td>
                    @for ($i = 0; $i < 5; $i++)
                        <td class="{{ isset($highlightedCells[$index]) ? 'highlight' : '' }}">
                            @if (isset($highlightedCells[$index]))
                               @if ($rol == 'alumno')
                                <button style="color: white">clase {{$hora}},{{$i}} </button>
                               @else
                                <button>Editar clase</button>
                               @endif
                            @endif
                        </td>
                    @endfor
                </tr>
            @endforeach
        </tbody>
    </table>
    <style>
        .highlight {
            background-color: rgb(31 41 55 / var(--tw-bg-opacity))
        }
    </style>
</div>
