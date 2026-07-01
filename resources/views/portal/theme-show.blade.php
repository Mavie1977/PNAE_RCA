@extends('layouts.app')
@section('content')
<main class="container"><section class="section"><h1 class="section-title">{{ $theme->icone }} {{ $theme->nom }}</h1><p>{{ $theme->description }}</p><br><table class="table"><tr><th>Démarche</th><th>Délai</th><th>Coût</th><th>Paiement</th><th>Action</th></tr>@foreach($theme->demarches as $d)<tr><td>{{ $d->nom }}</td><td>{{ $d->delai_traitement }}</td><td>{{ number_format($d->cout,0,',',' ') }} FCFA</td><td>{{ $d->paiement_obligatoire ? 'Oui' : 'Non' }}</td><td><a class="btn" href="{{ route('demarches.show', $d) }}">Faire la demande</a></td></tr>@endforeach</table></section></main>
@endsection
