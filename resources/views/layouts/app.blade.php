<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PNAE-RCA V8 Enterprise</title>
    <link rel="stylesheet" href="/css/pnae-rca-v8.css">
</head>
<body>
<div class="rca-strip"><span></span><span></span><span></span><span></span><span></span></div>
<header class="gov-header">
    <div class="brand">
        <img src="{{ asset('images/armoirie-rca.svg') }}" alt="Armoirie RCA">
        <div>
            <h1>République Centrafricaine</h1>
            <p class="devise"><span class="green">Unité</span> - <span class="yellow">Dignité</span> - <span class="red">Travail</span></p>
            <p>Système National d'Administration Électronique</p>
        </div>
    </div>
    <form class="search-box" action="{{ route('themes.index') }}" method="GET">
        <input name="q" placeholder="Rechercher une démarche, un service, un document..." value="{{ request('q') }}">
        <button type="submit">🔍</button>
    </form>
    <div class="account-area">
        <span>🔔 Notifications</span>
        <span>👤 {{ session('name') ?? 'Mon compte' }}</span>
    </div>
</header>
<nav class="navbar">
    <div>
        <a href="{{ route('portal.home') }}">ACCUEIL</a>
        <a href="{{ route('themes.index') }}">DÉMARCHES</a>
        <a href="{{ route('themes.index') }}">MINISTÈRES</a>
        <a href="{{ session('user_id') ? route('citizen.dashboard') : route('login') }}">PAIEMENTS</a>
        @if(session('role') === 'manager')
            <a href="{{ route('manager.stats') }}">STATISTIQUES</a>
        @else
            <a href="{{ route('login') }}">STATISTIQUES</a>
        @endif
        <a href="{{ route('themes.index') }}">AIDE</a>
    </div>
    <div>
        @if(session('user_id'))
            @if(session('role') === 'citoyen')
                <a class="cta" href="{{ route('citizen.dashboard') }}">ESPACE CITOYEN</a>
            @elseif(session('role') === 'agent_public')
                <a class="cta" href="{{ route('agent.dashboard') }}">ESPACE AGENT</a>
            @elseif(session('role') === 'manager')
                <a class="cta" href="{{ route('manager.dashboard') }}">ESPACE MANAGER</a>
            @elseif(session('role') === 'admin')
                <a class="cta" href="{{ route('admin.dashboard') }}">ADMINISTRATION</a>
            @endif
            <form method="POST" action="{{ route('logout') }}" style="display:inline">@csrf<button type="submit">Déconnexion</button></form>
        @else
            <a class="cta" href="{{ route('login') }}">ESPACE CITOYEN</a>
        @endif
    </div>
</nav>
@yield('content')
<footer class="footer"><div class="footer-grid"><div><h3>République Centrafricaine</h3><p>Unité - Dignité - Travail</p><p>Plateforme Nationale d'Administration Électronique</p></div><div><h3>Services</h3><p>Démarches</p><p>Paiements</p><p>Suivi des demandes</p></div><div><h3>Institution</h3><p>Ministères</p><p>Statistiques</p><p>Administration</p></div><div><h3>Contact</h3><p>Bangui - RCA</p><p>contact@pnae-rca.cf</p></div></div></footer>
</body>
</html>
