<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Config;
use App;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    public function index(){
        $url_now = URL::current();
        if ($url_now === 'https://bangjasa.com') {
            return redirect('tentang-kami');
        }
        $locale=Session::get('locale', Config::get('app.locale'));
        App::setLocale($locale);

        SEOTools::setTitle('Bangjasa by hylarana');
        SEOTools::setDescription('booth pameran | stan | pojok | backdrop | advertising | iklan luar ruang | above the line below the line | neon box | neon sign | billboard | huruf timbul | letter sign | signage penunjuk jalan | digital printing | logo sign | desain design booth | masker printing |  branding | Exhibition | Booth Construction | Promotion item Production | Shop Sign | Product Branding | Interior Equipment | Office Interior | branding mobil | branding toko | branding supermarket | branding pilar | branding lorong | branding gondola | gondola | end gondola | logo branding | interior desain | interior design | interior apartement | interior apartemen | kitchen set | dapur | rak dapur | lemari pakaian | lemari display | disiplay | meja | meja makan | meja tv | meja dapur | backdrop tv | sekat | sekat ruangan | backwall | hiasan dinding | partisi tembok | partisi kaca | partisi aluminium | partisi alumunium | partisi | pintu aluminium | pintu alumunium | pintu kaca | rolling door | pintu alumunium | pintu aluminium | kanopi | kanopi besi | kanopi polycarbonate | upvc | polycarbonate | spandek | bondek | pagar besi | teralis besi | pintu garasi | pintu besi | konstruksi besi | aluminium composite | alumunium composite | acp | facade | logo | light box | web desain | web design | programming | dll');
        SEOTools::opengraph()->setUrl('https://bangjasa.com');
        SEOTools::setCanonical('https://bangjasa.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@syaifulislamm');
        return view('home');
    }

    public function about(){
        SEOTools::setTitle('Bangjasa by hylarana');
        SEOTools::opengraph()->setUrl('https://bangjasa.com');
        SEOTools::setCanonical('https://bangjasa.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@syaifulislamm');
        return view('about');
    }

    public function contact(){
        SEOTools::setTitle('Bangjasa by hylarana');
        SEOTools::opengraph()->setUrl('https://bangjasa.com');
        SEOTools::setCanonical('https://bangjasa.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@syaifulislamm');
        return view('hubungi');
    }
}
