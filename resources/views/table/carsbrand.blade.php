@extends('main')
@section('content')

    <?php $i =1; ?>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Merk</th>
            <th scope="col">Kenteken</th>
            <th scope="col">Voertuigsoort</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($autos as $car)
            <?php $carBrand = $car['merk'];?>
            @if ($carBrand == $brand)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td> {{ $car['merk']}}</td>
                    <td> {{ $car['kenteken']}}</td>
                    <td> {{ $car['voertuigsoort']}}</td>
                </tr>
            @endif
        @endforeach

        </tbody>
    </table>
@endsection