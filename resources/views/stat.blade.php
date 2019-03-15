@extends('templatestat')

@section('title')
    Statistique DHT11
@endsection

@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row card text-white listProspect">
            <h1 class="card-header rounded-top" style="background-color: #4e413b;">Liste des valeurs</h1>
            <div class="card-body" style="background-color: #857671;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Temperature</th>
                            <th scope="col">Humidite</th>
                            <th scope="col">Date et Heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($valeurs as $valeur)
                        <tr>
                            <td>{{ $valeur->temperature }}</td>
                            <td>{{ $valeur->humidity }}</td>
                            <td>{{ $valeur->dateheure }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection