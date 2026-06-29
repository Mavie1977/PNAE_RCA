<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model {protected $fillable=['reference','citoyen_id','demarche_id','ministere_id','service_id','objet','statut','montant','date_depot']; public function demarche(){return $this->belongsTo(Demarche::class);}}
