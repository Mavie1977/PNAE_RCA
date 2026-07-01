@extends('layouts.app')
@section('content')<div class="form-box"><h1>Connexion</h1>

@if($errors->any())<p style="color:#D21034">{{ $errors->first() }}</p>

@endif

<form method="POST" action="{{ route('login.post') }}">

@csrf<label>Email</label><input type="email" name="email" value="{{ old('email') }}" 
required><label>Mot de passe</label><input type="password" name="password" 
required><button class="btn">Se connecter</button></form>
<p>Comptes de test : admin@pnae-rca.cf / manager@pnae-rca.cf / agent@pnae-rca.cf / citoyen@pnae-rca.cf</p>
<p>Mot de passe : <strong>password</strong></p></div>@endsection
