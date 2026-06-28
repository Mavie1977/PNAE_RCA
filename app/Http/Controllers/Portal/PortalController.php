<?php
namespace App\Http\Controllers\Portal;
use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\Demarche;

class PortalController extends Controller {
    public function index() {
        return view('portal.home', [
            'themes'=>Theme::withCount('demarches')->get(),
            'popularDemarches'=>Demarche::where('active', true)->take(6)->get(),
        ]);
    }
}
