<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Portal\PortalController;
use App\Http\Controllers\Portal\ThemeController;
use App\Http\Controllers\Portal\DemarcheController;
use App\Http\Controllers\Citizen\CitizenDashboardController;
use App\Http\Controllers\Agent\AgentDashboardController;
use App\Http\Controllers\Manager\ManagerDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PaymentController;

Route::get('/',[PortalController::class,'index'])->name('portal.home');
Route::get('/themes',[ThemeController::class,'index'])->name('themes.index');
Route::get('/themes/{theme}',[ThemeController::class,'show'])->name('themes.show');
Route::get('/demarches/{demarche}',[DemarcheController::class,'show'])->name('demarches.show');

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.post');
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register.post');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware(['pnae.auth'])->group(function(){
 Route::post('/demarches/{demarche}/demande',[DemarcheController::class,'store'])->name('demarches.store');
 Route::get('/paiements/{demande}/payer',[PaymentController::class,'pay'])->name('payments.pay');
 Route::post('/paiements/{demande}',[PaymentController::class,'store'])->name('payments.store');
 Route::get('/paiements/{paiement}/recu',[PaymentController::class,'receipt'])->name('payments.receipt');
 Route::prefix('citoyen')->middleware('pnae.role:citoyen')->name('citizen.')->group(function(){Route::get('/dashboard',[CitizenDashboardController::class,'index'])->name('dashboard');Route::get('/fiche',[CitizenDashboardController::class,'fiche'])->name('fiche');});
 Route::prefix('agent')->middleware('pnae.role:agent_public')->name('agent.')->group(function(){Route::get('/dashboard',[AgentDashboardController::class,'index'])->name('dashboard');Route::get('/fiche',[AgentDashboardController::class,'fiche'])->name('fiche');});
 Route::prefix('manager')->middleware('pnae.role:manager')->name('manager.')->group(function(){Route::get('/dashboard',[ManagerDashboardController::class,'index'])->name('dashboard');Route::get('/statistiques',[ManagerDashboardController::class,'stats'])->name('stats');});
 Route::prefix('admin')->middleware('pnae.role:admin')->name('admin.')->group(function(){Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');});
});
