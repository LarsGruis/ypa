@extends('main')
@section('content')

    <div class="container">
        <h2 class="text-left mt-4 mb-4">Detailpagina</h2>

        <p><b>Merk:</b> {{ $data['merk']}}</p>
        <p><b>Kenteken:</b> {{ $data['kenteken']}}</p>
        <p><b>handelsbenaming:</b> {{ $data['handelsbenaming']}}</p>
        <p><b>Vervaldatum APK:</b> {{ $data['vervaldatum_apk']}}</p>
        <p><b>Voertuigsoort:</b> {{ $data['voertuigsoort']}}</p>
        <b>Catalogus prijs werkt niet</b><br>
        <a href="{{ url('/getTenCars') }}" class="btn btn-primary mt-4">Terug naar overzicht</a>
    </div>

@endsection