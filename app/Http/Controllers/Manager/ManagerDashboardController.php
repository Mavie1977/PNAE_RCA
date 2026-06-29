<?php
namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller; use App\Models\Demande; use App\Models\Paiement;
class ManagerDashboardController extends Controller{public function index(){$q=Demande::query();if(session('ministere_id'))$q->where('ministere_id',session('ministere_id'));return view('manager.dashboard',['demandesTotal'=>(clone $q)->count(),'demandesTraitees'=>(clone $q)->where('statut','traitee')->count(),'demandesEnAttente'=>(clone $q)->where('statut','deposee')->count(),'recettes'=>Paiement::where('statut','paye')->sum('montant')]);} public function stats(){return view('manager.stats');}}
