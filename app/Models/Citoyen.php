<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model {protected $fillable=['user_id','nni','nom','prenom','telephone','email','date_naissance','lieu_naissance','nationalite','adresse'];}
