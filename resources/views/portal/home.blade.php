@extends('layouts.app')
@section('content')
<section class="hero"><div class="hero-content"><h2>Bienvenue sur le portail national</h2><h1>PNAE-RCA</h1><p>Une administration moderne au service des citoyens</p></div></section>
<main class="container">
<div class="home-grid">
<section class="section"><h2 class="section-title">Démarches par thème</h2><div class="theme-grid">
@foreach($themes as $theme)
<article class="theme-card"><div><div class="theme-icon">{{ $theme->icone }}</div><h2>{{ $theme->nom }}</h2><p>{{ $theme->description }}</p><p><strong>{{ $theme->demarches_count }}</strong> démarches</p></div><a class="btn" href="{{ route('themes.show', $theme) }}">Voir plus</a></article>
@endforeach
</div></section>
<aside class="section"><h2 class="section-title">Chiffres clés</h2><div class="kpi-grid"><div class="kpi"><strong>{{ $totalDemandes }}</strong><span>Demandes reçues</span></div><div class="kpi"><strong>{{ number_format($totalPaiements,0,',',' ') }}</strong><span>FCFA encaissés</span></div><div class="kpi"><strong>7</strong><span>Jours délai moyen</span></div><div class="kpi"><strong>12</strong><span>Ministères</span></div></div><br><a class="btn btn-blue" href="{{ route('login') }}">Accéder à mon espace</a></aside>
</div>
<div class="bottom-grid">
<section class="section"><h2 class="section-title">Services populaires</h2><table class="table"><tr><th>Démarche</th><th>Action</th></tr>@foreach($popularDemarches as $d)<tr><td>{{ $d->nom }}</td><td><a class="btn btn-light" href="{{ route('demarches.show', $d) }}">Ouvrir</a></td></tr>@endforeach</table></section>
<section class="section"><h2 class="section-title">Paiement en ligne</h2><p>Réglez vos frais administratifs en toute sécurité et obtenez un reçu imprimable.</p><br><a class="btn btn-yellow" href="{{ route('themes.index') }}">Démarrer une démarche</a></section>
<section class="section"><h2 class="section-title">Actualités</h2><div class="info-card"><h3>Lancement PNAE-RCA V8</h3><p>Nouvelle interface institutionnelle, tableaux de bord, paiements et suivi des démarches.</p></div></section>
</div>
</main>
@endsection
