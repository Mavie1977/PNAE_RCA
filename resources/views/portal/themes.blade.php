@extends('layouts.app')
@section('content')
<main class="container"><section class="section"><h1 class="section-title">Démarches par thème</h1><div class="theme-grid">
@foreach($themes as $theme)
<article class="theme-card"><div><div class="theme-icon">{{ $theme->icone }}</div><h2>{{ $theme->nom }}</h2><p>{{ $theme->description }}</p><p><strong>{{ $theme->demarches_count }}</strong> démarches</p></div><a class="btn" href="{{ route('themes.show', $theme) }}">Ouvrir</a></article>
@endforeach
</div></section></main>
@endsection
