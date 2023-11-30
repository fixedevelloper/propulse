<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Fixture;
use App\Models\League;
use App\Models\Stadings;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    public function standings(Request $request){
        $leagues=[];
        $stadings=[];
        $league=null;
        $country=null;
        if ($request->has('country')){
            $leagues=League::query()->where(['country_code'=>$request->get('country')])->get();
            $country=Country::query()->firstWhere(['code'=>$request->get('country')]);
        }
        if ($request->has('league')){
            $stadings=Stadings::query()->where(['league_id'=>$request->get('league')])->get();
           $league=League::query()->firstWhere(['league_id'=>$request->get('league')]);
        }
        $countries=Country::all();
        return view('standings', [
            'countries'=>$countries,
            'leagues'=>$leagues,
            'stadings'=>$stadings,
            'country_code'=>$request->get('country'),
            'league_id'=>$request->get('league'),
            'league'=>$league,
            'country_by'=>$country,
        ]);
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
