<?php
namespace App\Http\Controllers\Citizen;
use App\Http\Controllers\Controller; use App\Models\Demande; use App\Models\Paiement; use App\Models\Citoyen;
class CitizenDashboardController extends Controller{public function index(){return view('citizen.dashboard',['demandes'=>Demande::where('citoyen_id',session('user_id'))->latest()->get(),'paiements'=>Paiement::where('citoyen_id',session('user_id'))->latest()->get()]);} public function fiche(){return view('prints.citizen',['citoyen'=>Citoyen::where('user_id',session('user_id'))->first()]);}}
