<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SNAE-RCA V7 Enterprise</title>
<style>
:root{
    --blue:#003DA5;
    --blue-dark:#002B6F;
    --green:#009739;
    --yellow:#FFD100;
    --red:#D21034;
    --white:#fff;
    --bg:#f3f6fa;
    --text:#0f2341;
}

*{box-sizing:border-box}

body{
    margin:0;
    font-family:Arial, Helvetica, sans-serif;
    background:var(--bg);
    color:var(--text);
}

/* Bande couleurs RCA */
.rca-strip{
    height:10px;
    display:grid;
    grid-template-columns:2fr 2fr 2fr 2fr 1fr;
}

.rca-strip span:nth-child(1){background:var(--blue)}
.rca-strip span:nth-child(2){background:white}
.rca-strip span:nth-child(3){background:var(--green)}
.rca-strip span:nth-child(4){background:var(--yellow)}
.rca-strip span:nth-child(5){background:var(--red)}

/* Top institutionnel */
.gov-top{
    background:white;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:25px;
    padding:18px 42px;
}

.brand{
    display:flex;
    align-items:center;
    gap:18px;
}

.brand img{
    width:82px;
    height:auto;
}

.brand h1{
    margin:0;
    color:var(--blue-dark);
    font-size:25px;
    font-weight:900;
    text-transform:uppercase;
}

.brand p{
    margin:5px 0 0;
    color:var(--blue-dark);
    font-weight:bold;
}

.brand .devise span:nth-child(1){color:var(--green)}
.brand .devise span:nth-child(2){color:var(--yellow)}
.brand .devise span:nth-child(3){color:var(--red)}

.gov-search{
    flex:1;
    max-width:650px;
    display:flex;
    border:1px solid #ccd6e2;
    border-radius:8px;
    overflow:hidden;
    background:white;
}

.gov-search input{
    flex:1;
    border:0;
    padding:16px;
    font-size:16px;
}

.gov-search button{
    border:0;
    background:white;
    color:var(--blue-dark);
    font-size:24px;
    padding:0 18px;
}

.account-area{
    display:flex;
    align-items:center;
    gap:22px;
    font-weight:bold;
}

.notif{
    position:relative;
    color:var(--blue-dark);
}

.badge{
    position:absolute;
    top:-10px;
    right:-14px;
    background:var(--red);
    color:white;
    border-radius:50%;
    font-size:11px;
    padding:4px 7px;
}

/* Navigation */
.header{
    background:var(--blue-dark);
    color:white;
    padding:0 42px;
    height:58px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo{
    color:white;
    font-size:18px;
    font-weight:bold;
    text-decoration:none;
}

.nav{
    display:flex;
    align-items:center;
    gap:6px;
}

.nav a,
.nav button{
    background:transparent;
    color:white!important;
    border:0;
    height:58px;
    padding:0 18px;
    display:flex;
    align-items:center;
    text-decoration:none;
    font-weight:bold;
    border-radius:0;
}

.nav a:hover,
.nav button:hover{
    background:#01458f;
    border-bottom:5px solid var(--yellow);
}

.nav .cta{
    background:var(--green);
    height:38px;
    border-radius:5px;
    margin-left:16px;
}

/* Hero */
.hero{
    position:relative;
    min-height:310px;
    background:
        linear-gradient(90deg,rgba(255,255,255,.2),rgba(255,255,255,.92)),
        linear-gradient(180deg,#eaf4ff,#ffffff);
    display:flex;
    align-items:center;
    justify-content:center;
    padding:45px 30px;
    overflow:hidden;
    border-bottom:1px solid #dfe7f1;
}

.hero::before{
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:42%;
    height:100%;
    background:
        linear-gradient(to bottom,#003DA5 0 25%,#fff 25% 50%,#009739 50% 75%,#FFD100 75% 100%);
    opacity:.85;
    clip-path:polygon(0 0,85% 0,60% 100%,0 100%);
}

.hero::after{
    content:"";
    position:absolute;
    left:18%;
    top:0;
    width:70px;
    height:100%;
    background:var(--red);
    opacity:.9;
}

.hero-content{
    position:relative;
    z-index:2;
    text-align:center;
    max-width:850px;
}

.hero-content h2{
    color:var(--blue-dark);
    font-size:30px;
    margin:0;
    text-transform:uppercase;
}

.hero-content h1{
    color:var(--blue-dark);
    font-size:64px;
    letter-spacing:2px;
    margin:5px 0;
    font-weight:900;
}

.hero-content p{
    font-size:22px;
    margin:0;
    color:#1b3558;
}

.hero-features{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:22px;
    margin-top:35px;
}

.hero-feature{
    display:flex;
    gap:12px;
    align-items:center;
    text-align:left;
    background:rgba(255,255,255,.9);
    padding:12px;
    border-radius:12px;
}

.hero-feature strong{
    display:block;
    color:var(--blue-dark);
}

/* Contenu */
.container{
    max-width:1420px;
    margin:18px auto;
    padding:0 22px;
}

.section{
    background:white;
    border:1px solid #dfe7f1;
    border-radius:10px;
    padding:20px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.section-title{
    margin:0 0 18px;
    color:var(--blue-dark);
    font-size:21px;
    font-weight:900;
    text-transform:uppercase;
    border-bottom:4px solid var(--green);
    display:inline-block;
    padding-bottom:7px;
}

.home-grid{
    display:grid;
    grid-template-columns:3fr 1.1fr;
    gap:18px;
}

/* Cartes thèmes */
.theme-grid{
    display:grid;
    grid-template-columns:repeat(6,1fr);
    gap:18px;
}

.theme-card{
    background:white;
    border:1px solid #dfe7f1;
    border-radius:8px;
    padding:18px;
    min-height:255px;
    text-align:center;
    box-shadow:0 3px 10px rgba(0,0,0,.12);
}

.theme-icon{
    width:62px;
    height:62px;
    margin:0 auto 12px;
    border-radius:50%;
    background:var(--blue);
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
}

.theme-card:nth-child(3n) .theme-icon{background:var(--red)}
.theme-card:nth-child(3n+1) .theme-icon{background:var(--green)}
.theme-card:nth-child(3n+2) .theme-icon{background:var(--blue)}

.theme-card h2{
    color:var(--blue-dark);
    font-size:16px;
    text-transform:uppercase;
    margin:10px 0;
}

.theme-card p{
    font-size:14px;
    line-height:1.45;
}

.btn{
    background:var(--green);
    color:white!important;
    padding:9px 14px;
    border-radius:6px;
    display:inline-block;
    text-decoration:none;
    font-weight:bold;
    border:0;
}

.btn-yellow{
    background:var(--yellow);
    color:#111!important;
}

.btn-blue{
    background:var(--blue);
}

/* Chiffres clés */
.kpi-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
}

.kpi{
    background:white;
    border:1px solid #dfe7f1;
    border-radius:8px;
    padding:18px;
    text-align:center;
}

.kpi strong{
    display:block;
    font-size:26px;
    color:var(--blue-dark);
}

.kpi span{
    font-size:13px;
}

/* Bas accueil */
.bottom-grid{
    display:grid;
    grid-template-columns:1.2fr 1.2fr 1.4fr;
    gap:18px;
    margin-top:18px;
}

.service-list{
    list-style:none;
    margin:0;
    padding:0;
}

.service-list li{
    border-bottom:1px solid #e5eaf0;
    padding:12px 0;
    display:flex;
    justify-content:space-between;
}

/* Tableaux */
.table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

.table th,
.table td{
    border:1px solid #dfe7f1;
    padding:12px;
    text-align:left;
}

.table th{
    background:#eef4fb;
    color:var(--blue-dark);
}

/* Footer */
.footer{
    margin-top:30px;
    background:var(--blue-dark);
    color:white;
    padding:28px 42px;
    border-top:6px solid var(--green);
}

.footer-grid{
    display:grid;
    grid-template-columns:2fr 1fr 1fr 1fr;
    gap:20px;
}

.footer h3{
    margin-top:0;
}

/* Impression */
.print-header{
    display:none;
}

@media print{
    .rca-strip,
    .gov-top,
    .header,
    .footer,
    .btn,
    button,
    form{
        display:none!important;
    }

    body{
        background:white;
    }

    .container,
    .section{
        box-shadow:none;
        border:0;
        margin:0;
        max-width:100%;
    }

    .print-header{
        display:block;
        text-align:center;
        border-bottom:2px solid #000;
        margin-bottom:20px;
    }
}

/* Responsive */
@media(max-width:1100px){
    .gov-top{
        flex-direction:column;
        align-items:stretch;
    }

    .home-grid,
    .bottom-grid{
        grid-template-columns:1fr;
    }

    .theme-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .hero-features{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:600px){
    .header{
        height:auto;
        padding:12px;
    }

    .nav{
        flex-direction:column;
        align-items:stretch;
        width:100%;
    }

    .nav a,
    .nav button{
        height:auto;
        padding:12px;
    }

    .theme-grid,
    .hero-features,
    .kpi-grid{
        grid-template-columns:1fr;
    }

    .hero-content h1{
        font-size:38px;
    }

    .brand h1{
        font-size:18px;
    }

    .brand img{
        width:60px;
    }
}

</style>
</head>
<body>
<div class="rca-strip">
    <span></span><span></span><span></span><span></span><span></span>
</div>

<div class="gov-top">
    <div class="brand">
        <img src="{{ asset('images/armoirie-rca.png') }}" alt="Armoirie RCA">
        <div>
            <h1>République Centrafricaine</h1>
            <p class="devise">
                <span>Unité</span> -
                <span>Dignité</span> -
                <span>Travail</span>
            </p>
            <p>Système National d'Administration Électronique</p>
        </div>
    </div>

    <form class="gov-search" action="{{ route('themes.index') }}">
        <input placeholder="Rechercher une démarche, un service, un document...">
        <button>🔍</button>
    </form>

    <div class="account-area">
        <div class="notif">🔔 Notifications <span class="badge">3</span></div>
        <div>👤 {{ session('name') ?? 'Mon compte' }}</div>
    </div>
</div>

<header class="header">
    <a class="logo" href="{{ route('portal.home') }}">Accueil</a>

    <nav class="nav">
        <a href="{{ route('portal.home') }}">ACCUEIL</a>
        <a href="{{ route('themes.index') }}">DÉMARCHES</a>
        <a href="#">MINISTÈRES</a>
        <a href="#">PAIEMENTS</a>
        <a href="#">STATISTIQUES</a>
        <a href="#">ACTUALITÉS</a>
        <a href="#">AIDE</a>

        @if(session('user_id'))
            <a class="cta" href="{{ route('manager.dashboard') }}">ESPACE MANAGER</a>
        @else
            <a class="cta" href="{{ route('login') }}">ESPACE CITOYEN</a>
        @endif
    </nav>
</header>

@yield('content')

<footer class="footer">
    <div class="footer-grid">
        <div>
            <h3>République Centrafricaine</h3>
            <p>Unité - Dignité - Travail</p>
            <p>Système National d'Administration Électronique</p>
        </div>
        <div>
            <h3>Liens rapides</h3>
            <p>Démarches</p>
            <p>Paiements</p>
            <p>Ministères</p>
        </div>
        <div>
            <h3>Nous contacter</h3>
            <p>Bangui - RCA</p>
            <p>contact@snae-rca.cf</p>
        </div>
        <div>
            <h3>Application mobile</h3>
            <p>Bientôt disponible</p>
        </div>
    </div>
</footer>
</body>
</html>
