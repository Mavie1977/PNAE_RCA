@extends('layouts.v7')
@section('content')
<main class="container">
<div class="print-header">
<h2>République Centrafricaine</h2>
<p>Unité - Dignité - Travail</p>
<p>SNAE-RCA - Reçu de paiement</p>
</div>
<button onclick="window.print()" class="btn">Imprimer le reçu</button>
<h1>Reçu de paiement</h1>
<table class="table">
<tr><th>Référence</th><td>{{ $paiement->reference_transaction }}</td></tr>
<tr><th>Montant</th><td>{{ number_format($paiement->montant,0,',',' ') }} FCFA</td></tr>
<tr><th>Moyen</th><td>{{ $paiement->moyen_paiement }}</td></tr>
<tr><th>Statut</th><td>{{ $paiement->statut }}</td></tr>
<tr><th>Date</th><td>{{ $paiement->date_paiement }}</td></tr>
</table>
</main>
@endsection
