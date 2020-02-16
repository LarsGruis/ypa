@extends('main')
@section('content')
<?php $i =1; ?>

    <h2 class="text-center mt-4 mb-4">Hier zie je de eerste 10 auto's</h2>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Merk</th>
                <th scope="col">Kenteken</th>
                <th scope="col">Voertuigsoort</th>
                <th scope="col">Detailpagina</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($data  as $user)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td> {{ $user['merk']}}</td>
            <td> {{ $user['kenteken']}}</td>
            <td> {{ $user['voertuigsoort']}}</td>
            <td><a href="{{ url('/carsdetail/' . $i ) }}" class="btn btn-primary">Detail</a></td>
        </tr>
    @endforeach

</tbody>
</table>
@endsection