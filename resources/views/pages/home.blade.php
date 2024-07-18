@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>Treni in partenza oggi</h1>

    @if($trains->isEmpty())
        <p>Nessun treno in partenza oggi.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In orario</th>
                    <th>Cancellato</th>
                    <th>Tipo Treno</th>
                    <th>Servizi a bordo</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->tipo_treno }}</td>
                        <td>{{ $train->servizi_a_bordo }}</td>
                        <td>{{ $train->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
