<?php
namespace App\Http\Controllers\Portal;
use App\Http\Controllers\Controller; use App\Models\Demarche; use App\Models\Demande;
class DemarcheController extends Controller{public function show(Demarche $demarche){return view('portal.demarche-show',['demarche'=>$demarche]);} public function store(Demarche $demarche){$demande=Demande::create(['reference'=>'PNAE-'.date('Ymd').'-'.random_int(10000,99999),'citoyen_id'=>session('user_id'),'demarche_id'=>$demarche->id,'ministere_id'=>$demarche->ministere_id,'objet'=>$demarche->nom,'statut'=>'en_attente_paiement','montant'=>$demarche->cout,'date_depot'=>now()]);return $demarche->paiement_obligatoire&&$demarche->cout>0?redirect()->route('payments.pay',$demande):redirect()->route('citizen.dashboard');}}
