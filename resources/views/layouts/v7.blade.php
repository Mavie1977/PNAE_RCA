<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SNAE-RCA V7 Enterprise</title>
<style>
:root{--blue:#003DA5;--green:#009739;--yellow:#FFD100;--red:#D21034;--dark:#2E2E2E;--light:#f4f6f8}
*{box-sizing:border-box}
body{margin:0;font-family:Arial,sans-serif;background:var(--light);color:var(--dark)}
.header{background:var(--blue);color:white;padding:10px 24px;display:flex;gap:16px;align-items:center;flex-wrap:wrap;box-shadow:0 3px 12px #0003}
.logo{font-size:20px;font-weight:bold;color:white;text-decoration:none}
.nav{display:flex;gap:8px;flex-wrap:wrap}
.nav a,.btn,button{background:var(--green);color:white!important;border:0;border-radius:8px;padding:9px 13px;text-decoration:none;font-weight:bold;cursor:pointer}
.nav a:hover,.btn:hover,button:hover{background:#007c30}
.container{max-width:1200px;margin:28px auto;background:white;border-radius:14px;padding:28px;box-shadow:0 8px 24px #0001}
.hero{background:linear-gradient(120deg,var(--blue),var(--green));color:white;padding:60px 30px;text-align:center;border-bottom:6px solid var(--yellow)}
.hero h1{font-size:42px;margin:0 0 12px}
.searchbox{max-width:760px;margin:25px auto 0;display:flex;background:white;border-radius:40px;overflow:hidden}
.searchbox input{flex:1;border:0;padding:16px;font-size:17px}
.searchbox button{border-radius:0;background:var(--red)}
.theme-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px}
.theme-card{background:white;border:1px solid #ddd;border-radius:12px;padding:24px;min-height:240px;box-shadow:0 4px 12px #0002}
.theme-icon{font-size:58px;text-align:center}
.theme-card h2{color:#f07f2f;font-size:22px;text-transform:uppercase}
.table{width:100%;border-collapse:collapse}.table th,.table td{border:1px solid #ddd;padding:10px}.table th{background:#f1f5f9}
.cards{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}.card{background:#f8fafc;border-left:5px solid var(--green);padding:18px;border-radius:10px}
.print-header{display:none}
@media print{.header,.btn,button,form{display:none!important}.container{box-shadow:none;margin:0;max-width:100%;border-radius:0}.print-header{display:block;text-align:center;border-bottom:2px solid #000;margin-bottom:20px}}
@media(max-width:900px){.theme-grid,.cards{grid-template-columns:1fr}.hero h1{font-size:30px}.header{display:block}.nav{margin-top:10px}.searchbox{display:block;border-radius:12px}.searchbox input{width:100%}}
</style>
</head>
<body>
<header class="header">
<a class="logo" href="{{ route('portal.home') }}">🇨🇫 SNAE-RCA V7</a>
<nav class="nav">
<a href="{{ route('portal.home') }}">Accueil</a>
<a href="{{ route('themes.index') }}">Démarches</a>
@if(session('user_id'))
<a href="{{ route('manager.dashboard') }}">Pilotage</a>
<form method="POST" action="{{ route('logout') }}" style="display:inline">@csrf<button>Déconnexion</button></form>
@else
<a href="{{ route('login') }}">Connexion</a>
<a href="{{ route('register') }}">Créer un compte</a>
@endif
</nav>
</header>
@yield('content')
</body>
</html>
