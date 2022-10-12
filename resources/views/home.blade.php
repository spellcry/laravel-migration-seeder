@extends('layouts/app')

@section('metaTitle', 'Trains')

@section('content')
    <div class="container">
        <h1 class="title">Stazione</h1>
        <h3 class="in_partenza">Treni in partenza</h3>
        <ul class="trains-list">
        @forelse ($trains as $train)
            <li class="list-item">
                <p class="info azienda">
                    <span class="accent">Azienda:</span>
                    {{ $train->azienda }}
                </p>
                <p class="info stazione_partenza">
                    <span class="accent">Stazione di partenza:</span>
                    {{ $train->stazione_partenza }}
                </p>
                <p class="info stazione_arrivo">
                    <span class="accent">Stazione di arrivo:</span>
                    {{ $train->stazione_arrivo }}
                </p>
                <p class="info orario_partenza">
                    <span class="accent">Orario di partenza:</span>
                    {{ $train->orario_partenza }}
                </p>
                <p class="info orario_arrivo">
                    <span class="accent">Orario di arrivo:</span>
                    {{ $train->orario_arrivo }}
                </p>
                <p class="info codice_treno">
                    <span class="accent">Codice treno:</span>
                    {{ $train->codice_treno }}
                </p>
                <p class="info numero_carrozze">
                    <span class="accent">Numero di carrozze:</span>
                    {{ $train->numero_carrozze }}
                </p>
                <p class="info in_orario">
                    <span class="accent">Previsione di partenza:</span>
                    {{ $train->in_orario == 0 ? 'In ritardo' : 'In orario' }}
                </p>
            </li>
        @empty
        <li class="list-item">
            Nessun treno in partenza.
        </li>
        @endforelse
        </ul>
    </div>
    <div class="container">
        <h3 class="cancellati">Treni cancellati</h3>
        <ul class="trains-list">
        @forelse ($trainsDeleted as $train)
            <li class="list-item">
                <p class="info azienda">
                    <span class="accent">Azienda:</span>
                    {{ $train->azienda }}
                </p>
                <p class="info stazione_partenza">
                    <span class="accent">Stazione di partenza:</span>
                    {{ $train->stazione_partenza }}
                </p>
                <p class="info stazione_arrivo">
                    <span class="accent">Stazione di arrivo:</span>
                    {{ $train->stazione_arrivo }}
                </p>
                <p class="info orario_partenza">
                    <span class="accent">Orario di partenza:</span>
                    {{ $train->orario_partenza }}
                </p>
                <p class="info orario_arrivo">
                    <span class="accent">Orario di arrivo:</span>
                    {{ $train->orario_arrivo }}
                </p>
                <p class="info codice_treno">
                    <span class="accent">Codice treno:</span>
                    {{ $train->codice_treno }}
                </p>
                <p class="info numero_carrozze">
                    <span class="accent">Numero di carrozze:</span>
                    {{ $train->numero_carrozze }}
                </p>
            </li>
        @empty
        <li class="list-item">
            Nessun treno in partenza.
        </li>
        @endforelse
        </ul>
    </div>
@endsection