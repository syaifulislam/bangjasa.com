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

        SEOTools::setTitle('Bangjasa by hylarana');
        SEOTools::setDescription('hylarana advertising and technology');
        SEOTools::opengraph()->setUrl('https://bangjasa.com');
        SEOTools::setCanonical('https://bangjasa.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@syaifulislamm');
        return view('under_development');
    }
}
