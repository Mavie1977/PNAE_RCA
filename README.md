# PNAE-RCA V7 Enterprise

Nouvelle version propre du portail national d'administration électronique de la République Centrafricaine.

## Contenu
- Projet Laravel complet à installer avec Composer
- Design CSS aux couleurs RCA
- Armoirie SVG incluse
- Authentification simple
- Rôles : citoyen, agent_public, manager, admin
- Démarches par thème
- Paiement simulé
- Reçu imprimable
- Tableaux de bord

## Installation
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

Comptes de test :
- admin@pnae-rca.cf / password
- manager@pnae-rca.cf / password
- agent@pnae-rca.cf / password
- citoyen@pnae-rca.cf / password
