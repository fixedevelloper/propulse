<?php


namespace App\Http\Controllers;


use App\Models\Fixture;
use App\Models\League;
use Carbon\Carbon;

class FrontController extends Controller
{

    public function home(){
        $today=date('y-m-d');
        $today_timestamp=Carbon::parse($today)->getTimestamp();
        $leagues=League::query()->whereIn('league_id',[3,1,5])->get();
        logger($today_timestamp);
        $fixtures=Fixture::query()->where(['day_timestamp'=>$today_timestamp])->paginate(15);
        $fixture_limit=Fixture::query()->where(['day_timestamp'=>$today_timestamp])->orderByDesc('fixture_id')->limit(10)->get();
        return view('home', [
            'fixture_days'=>$fixtures,
            'fixture_slides'=>$fixture_limit,
            'leagues'=>$leagues
        ]);

    }
    public function live(){
        return view('live', []);
    }
    public function standings(){
        return view('standings', []);
    }
    public function sportbetting(){
        return view('sportbetting', []);

    }
    public function casino(){
        return view('casino', []);

    }
    public function promotions(){
        return view('promotions', []);

    }
    public function about_us(){
        return view('about_us', []);

    }
    public function contact_us(){
        return view('contact_us', []);

    }
    public function register(){
        return view('register', []);

    }
}
