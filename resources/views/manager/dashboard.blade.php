@extends('layouts.v7')
@section('content')
<main class="container">
<h1>Tableau de bord manager</h1>
<div class="cards">
<div class="card"><h3>Paiements</h3><p>{{ $paiements }}</p></div>
<div class="card"><h3>Recettes</h3><p>{{ number_format($recettes,0,',',' ') }} FCFA</p></div>
<div class="card"><h3>Dossiers en retard</h3><p>{{ $indicateurs->sum('demandes_retard') }}</p></div>
<div class="card"><h3>Délai moyen</h3><p>{{ number_format($indicateurs->avg('delai_moyen'),1,',',' ') }} j</p></div>
</div>
<a class="btn" href="{{ route('manager.stats') }}">Voir statistiques détaillées</a>
</main>
@endsection
