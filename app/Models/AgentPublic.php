<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AgentPublic extends Model {protected $fillable=['user_id','matricule','nom','prenom','ministere_id','service_id','grade','fonction','statut'];}
