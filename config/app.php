<?php
return [
    'name'=>env('APP_NAME','PNAE-RCA'),'env'=>env('APP_ENV','production'),'debug'=>(bool)env('APP_DEBUG',false),
    'url'=>env('APP_URL','http://localhost'),'timezone'=>'Africa/Bangui','locale'=>env('APP_LOCALE','fr'),
    'fallback_locale'=>env('APP_FALLBACK_LOCALE','fr'),'key'=>env('APP_KEY'),'cipher'=>'AES-256-CBC',
];
