<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\User; use App\Models\Demande; use App\Models\Paiement; use App\Models\Ministere;
class AdminDashboardController extends Controller{public function index(){return view('admin.dashboard',['users'=>User::count(),'demandes'=>Demande::count(),'recettes'=>Paiement::where('statut','paye')->sum('montant'),'ministeres'=>Ministere::count()]);}}
