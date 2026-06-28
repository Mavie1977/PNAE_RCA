@extends('layouts.v7')
@section('content')
<main class="container">
<h1>Paiement du service</h1>
<form method="POST" action="{{ route('payments.store', $demandeId) }}">
@csrf
<label>Montant</label><br>
<input name="montant" value="{{ $montant }}" style="padding:10px;width:100%;max-width:300px"><br><br>
<label>Moyen de paiement</label><br>
<select name="moyen_paiement" style="padding:10px;width:100%;max-width:300px">
<option>Mobile Money</option>
<option>Carte bancaire</option>
<option>Paiement au guichet</option>
<option>Virement bancaire</option>
</select><br><br>
<button>Valider le paiement</button>
</form>
</main>
@endsection
