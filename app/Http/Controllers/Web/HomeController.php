<?php

namespace App\Http\Controllers\Web;


use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        return view('Web.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function faq(){
        return view('Web.faq');
    }
    /**
     * @return Application|Factory|View
     */
    public function contact_us(){
        return view('Web.contact_us');
    }

    /**
     * @return Application|Factory|View
     */
    public function privacy(){
        $Privacy = Setting::where('key','privacy')->first();
        if (!$Privacy) {
            return redirect('/');
        }
        return view('Web.privacy',compact('Privacy'));
    }
    /**
     * @return Application|Factory|View
     */
    public function terms(){
        $Term = Setting::where('key','terms')->first();
        if (!$Term) {
            return redirect('/');
        }
        return view('Web.terms',compact('Term'));
    }
    /**
     * @return Application|Factory|View
     */
    public function commission(){
        $Commission = Setting::where('key','commission')->first();
        if (!$Commission) {
            return redirect('/');
        }
        return view('Web.commission',compact('Commission'));
    }

    /**
     * @return RedirectResponse
     */
    public function lang(){
        if(session('localization','en') =='en'){
            session(['localization' => 'ar']);
        }else{
            session(['localization' => 'en']);
        }
        App::setLocale(session('localization'));
        return redirect()->back();
    }
}
