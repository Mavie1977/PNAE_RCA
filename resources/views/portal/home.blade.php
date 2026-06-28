@extends('layouts.v7')
@section('content')
<section class="hero">
    <h1>République Centrafricaine</h1>
    <p>Système National d'Administration Électronique - SNAE-RCA V7 Enterprise</p>
    <form class="searchbox" action="{{ route('themes.index') }}">
        <input placeholder="Rechercher une démarche : acte de naissance, casier, permis...">
        <button>Rechercher</button>
    </form>
</section>
<main class="container">
    <h2>Vos démarches par thème</h2>
    <div class="theme-grid">
        @foreach($themes as $theme)
        <div class="theme-card">
            <div class="theme-icon">{{ $theme->icone }}</div>
            <h2>{{ $theme->nom }}</h2>
            <p>{{ $theme->description }}</p>
            <p><strong>{{ $theme->demarches_count }}</strong> démarches disponibles</p>
            <a class="btn" href="{{ route('themes.show', $theme) }}">Voir les démarches</a>
        </div>
        @endforeach
    </div>
    <h2 style="margin-top:35px">Services les plus demandés</h2>
    <table class="table">
        <tr><th>Démarche</th><th>Coût</th><th>Délai</th><th>Action</th></tr>
        @foreach($popularDemarches as $d)
        <tr>
            <td>{{ $d->nom }}</td>
            <td>{{ number_format($d->cout,0,',',' ') }} FCFA</td>
            <td>{{ $d->delai_traitement }}</td>
            <td><a class="btn" href="{{ route('demarches.show', $d) }}">Faire la demande</a></td>
        </tr>
        @endforeach
    </table>
</main>
@endsection
