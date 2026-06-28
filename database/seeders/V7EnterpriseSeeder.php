<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theme;
use App\Models\Demarche;
use App\Models\ManagerIndicateur;

class V7EnterpriseSeeder extends Seeder {
    public function run(): void {
        $themes = [
            ['papier','PAPIER','📋','État civil, identité, nationalité et légalisation'],
            ['education','ÉDUCATION - FORMATION','🎓','Diplômes, attestations, bourses et inscriptions'],
            ['sante','SANTÉ - PROTECTION SOCIALE','🏥','Certificats médicaux et protection sociale'],
            ['justice','JUSTICE','⚖️','Casier judiciaire et documents judiciaires'],
            ['transport','TRANSPORTS','🚗','Permis, carte grise et véhicules'],
            ['logement','LOGEMENT - HABITAT','🏠','Habitat, urbanisme et questions foncières'],
            ['commerce','PRODUITS ET SERVICES','💼','Commerce, entreprise et autorisations'],
            ['administration','ADMINISTRATION','🏛️','Fonction publique, agents et ministères'],
        ];

        foreach ($themes as $t) {
            Theme::updateOrCreate(['code'=>$t[0]], ['nom'=>$t[1], 'icone'=>$t[2], 'description'=>$t[3]]);
        }

        $demarches = [
            ['papier','Demande d’acte de naissance',1000,'72 heures',true],
            ['papier','Certificat de nationalité',3000,'7 jours',true],
            ['papier','Légalisation de document',1000,'48 heures',true],
            ['education','Attestation de réussite',2000,'7 jours',true],
            ['education','Demande de diplôme',5000,'15 jours',true],
            ['sante','Certificat médical administratif',3000,'48 heures',true],
            ['justice','Casier judiciaire',3000,'7 jours',true],
            ['transport','Permis de conduire',10000,'15 jours',true],
            ['transport','Carte grise',15000,'10 jours',true],
            ['commerce','Immatriculation entreprise',10000,'10 jours',true],
            ['administration','Attestation de service',0,'72 heures',false],
            ['administration','Demande de congé agent public',0,'5 jours',false],
        ];

        foreach ($demarches as $d) {
            $theme = Theme::where('code', $d[0])->first();
            Demarche::updateOrCreate(
                ['theme_id'=>$theme->id, 'nom'=>$d[1]],
                ['description'=>'Démarche en ligne disponible sur SNAE-RCA.', 'cout'=>$d[2], 'delai_traitement'=>$d[3], 'paiement_obligatoire'=>$d[4], 'active'=>true]
            );
        }

        for ($i=1; $i<=6; $i++) {
            ManagerIndicateur::updateOrCreate(
                ['periode'=>now()->subMonths($i)->startOfMonth()->toDateString()],
                ['demandes_recues'=>120+$i*20, 'demandes_traitees'=>95+$i*18, 'demandes_retard'=>8+$i, 'recettes'=>1500000+$i*250000, 'delai_moyen'=>2.5+($i/10)]
            );
        }
    }
}
