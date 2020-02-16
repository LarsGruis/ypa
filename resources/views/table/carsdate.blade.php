@extends('main')
@section('content')

    <?php $i =1; ?>

    <h2 class="text-center mt-4 mb-4">Hier zie je 10 auto's van een bepaalde datum</h2>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Merk</th>
            <th scope="col">Kenteken</th>
            <th scope="col">Datum</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($autos as $car)
            <?php $dateTenaamstelling = $car["datum_tenaamstelling"];?>
            @if ($dateTenaamstelling == $datum)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td> {{ $car['merk']}}</td>
                    <td> {{ $car['kenteken']}}</td>
                    <td> {{ $car['datum_tenaamstelling']}}</td>
                </tr>
            @endif
       @endforeach
        </tbody>
    </table>

@endsection