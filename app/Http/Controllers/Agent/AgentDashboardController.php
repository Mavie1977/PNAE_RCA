<?php
namespace App\Http\Controllers\Agent;
use App\Http\Controllers\Controller; use App\Models\Demande; use App\Models\AgentPublic;
class AgentDashboardController extends Controller{public function index(){return view('agent.dashboard',['demandes'=>Demande::where('ministere_id',session('ministere_id'))->latest()->get()]);} public function fiche(){return view('prints.agent',['agent'=>AgentPublic::where('user_id',session('user_id'))->first()]);}}
