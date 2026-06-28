<?php
namespace App\Http\Controllers\Portal;
use App\Http\Controllers\Controller;
use App\Models\Demarche;

class DemarcheController extends Controller {
    public function show(Demarche $demarche) { return view('portal.demarche-show', ['demarche'=>$demarche]); }
    public function store(Demarche $demarche) {
        if ($demarche->paiement_obligatoire) {
            return redirect()->route('payments.pay', ['demande'=>$demarche->id]);
        }
        return redirect()->route('portal.home')->with('success','Demande enregistrée.');
    }
}
