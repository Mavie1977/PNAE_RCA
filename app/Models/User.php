<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model {protected $fillable=['name','email','password','role','statut','ministere_id','service_id']; protected $hidden=['password']; public function setPasswordAttribute($v){$this->attributes['password']=str_starts_with($v,'$2y$')?$v:Hash::make($v);}}
