<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Config;
use App;
use Artesaos\SEOTools\Facades\SEOTools;

class DashboardController extends Controller
{
    public function index(){
        $locale=Session::get('locale', Config::get('app.locale'));
        App::setLocale($locale);

        SEOTools::setTitle('bangjasa.com');
        SEOTools::setDescription('advertising | technology | hylarana | bangjasa');
        return view('under_development');
    }
}
