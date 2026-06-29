<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder; use App\Models\User; use App\Models\Ministere; use App\Models\Theme; use App\Models\Demarche; use App\Models\Citoyen; use App\Models\AgentPublic;
class PnaeSeeder extends Seeder{public function run():void{
 $interieur=Ministere::updateOrCreate(['sigle'=>'MI'],['nom'=>'Ministère de l’Intérieur','description'=>'État civil, identité']);
 $justice=Ministere::updateOrCreate(['sigle'=>'MJ'],['nom'=>'Ministère de la Justice','description'=>'Justice et légalisation']);
 $admin=User::updateOrCreate(['email'=>'admin@pnae-rca.cf'],['name'=>'Administrateur National','password'=>'password','role'=>'admin','statut'=>'actif']);
 User::updateOrCreate(['email'=>'manager@pnae-rca.cf'],['name'=>'Manager Ministériel','password'=>'password','role'=>'manager','statut'=>'actif','ministere_id'=>$interieur->id]);
 $agent=User::updateOrCreate(['email'=>'agent@pnae-rca.cf'],['name'=>'Agent État Civil','password'=>'password','role'=>'agent_public','statut'=>'actif','ministere_id'=>$interieur->id]);
 AgentPublic::updateOrCreate(['matricule'=>'AG-0001'],['user_id'=>$agent->id,'nom'=>'Agent','prenom'=>'État Civil','ministere_id'=>$interieur->id,'grade'=>'Attaché administratif','fonction'=>'Agent instructeur']);
 $cit=User::updateOrCreate(['email'=>'citoyen@pnae-rca.cf'],['name'=>'Citoyen Test','password'=>'password','role'=>'citoyen','statut'=>'actif']);
 Citoyen::updateOrCreate(['nni'=>'RCA-000001'],['user_id'=>$cit->id,'nom'=>'Citoyen','prenom'=>'Test','telephone'=>'75000001','email'=>'citoyen@pnae-rca.cf','date_naissance'=>'1994-03-15','lieu_naissance'=>'Bangui','adresse'=>'Bangui Centre']);
 $themes=[['etat-civil','ÉTAT CIVIL','👥','Naissance, mariage, décès'],['identite','IDENTITÉ','🪪','NNI, passeport, nationalité'],['justice','JUSTICE','⚖️','Casier, légalisation'],['education','ÉDUCATION','🎓','Diplômes, bourses'],['sante','SANTÉ','🏥','Certificats, assurance'],['transport','TRANSPORT','🚗','Permis, carte grise'],['logement','LOGEMENT','🏠','Foncier, habitat'],['commerce','SERVICES','💼','Entreprise, commerce']];
 foreach($themes as $t)Theme::updateOrCreate(['code'=>$t[0]],['nom'=>$t[1],'icone'=>$t[2],'description'=>$t[3]]);
 $map=Theme::pluck('id','code');
 $demarches=[['etat-civil',$interieur->id,'Demande d’acte de naissance',1000,'72 heures',true],['identite',$interieur->id,'Carte Nationale d’Identité',5000,'15 jours',true],['justice',$justice->id,'Casier judiciaire',3000,'7 jours',true],['justice',$justice->id,'Légalisation de document',1000,'48 heures',true],['transport',$interieur->id,'Permis de conduire',10000,'15 jours',true]];
 foreach($demarches as $d)Demarche::updateOrCreate(['theme_id'=>$map[$d[0]],'nom'=>$d[2]],['ministere_id'=>$d[1],'description'=>'Démarche en ligne disponible sur PNAE-RCA.','cout'=>$d[3],'delai_traitement'=>$d[4],'paiement_obligatoire'=>$d[5],'active'=>true]);
}}
