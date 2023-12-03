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

    public function home(Request $request)
    {
        if (is_null($request->get('date'))){
            $date_=Carbon::today()->format('Y-m-d');
            $timestamp=Carbon::today()->getTimestamp();
        }else{
            $date_=$request->get('date');
            $timestamp=Carbon::parse($date_)->getTimestamp();
        }
        if ($request->get('act')=="live"){
            $leagues=Fixture::query()->where(['day_timestamp'=>$timestamp])->whereIn('st_short',['1H','2H'])
                ->distinct()->paginate(12,['league_id','league_round','league_season'])->appends(['date'=>$date_,'act'=>$request->get('act')])
            ;
        }else{
            $leagues=Fixture::query()->where(['day_timestamp'=>$timestamp])->orderByDesc('league_id')
                ->distinct()->paginate(12,['league_id','league_round','league_season'])->appends(['date'=>$date_,'act'=>$request->get('act')])
            ;
        }

        return view('home', [
          "leagues"=>$leagues,
            'date'=>$date_
        ]);

    }

    public function live()
    {
        $today = date('y-m-d');
        $today_timestamp = Carbon::parse($today)->getTimestamp();
        $leagues = League::query()->whereIn('league_id', [3, 1, 5])->get();
        logger($today_timestamp);
        $fixtures = Fixture::query()->where(['day_timestamp' => $today_timestamp])->paginate(15);
        $fixture_limit = Fixture::query()->where(['day_timestamp' => $today_timestamp])->orderByDesc('fixture_id')->limit(10)->get();

        return view('live', [
            'fixture_days' => $fixtures,
            'fixture_slides' => $fixture_limit,
            'leagues' => $leagues
        ]);
    }

    public function standings(Request $request)
    {
        $leagues = [];
        $stadings = [];
        $league = null;
        $country = null;
        $stadings_home=[];
        if ($request->has('country')) {
            $leagues = League::query()->where(['country_code' => $request->get('country')])->get();
            $country = Country::query()->firstWhere(['code' => $request->get('country')]);
        }
        if ($request->has('league')) {
            $stadings = Stadings::query()->where(['league_id' => $request->get('league')])->get();
            $stadings_home=Stadings::query()->where(['league_id' => $request->get('league')])->orderByDesc('home_win')->get();
            $league = League::query()->firstWhere(['league_id' => $request->get('league')]);
        }
        $countries = Country::all();

        return view('standings', [
            'countries' => $countries,
            'leagues' => $leagues,
            'stadings' => $stadings,
            'stadings_home' => $stadings_home,
            'country_code' => $request->get('country'),
            'league_id' => $request->get('league'),
            'league' => $league,
            'country_by' => $country,
        ]);
    }

    public function sportbetting()
    {
        return view('sportbetting', []);

    }

    public function casino()
    {
        return view('casino', []);

    }

    public function promotions()
    {
        return view('promotions', []);

    }

    public function about_us()
    {
        return view('about_us', []);

    }

    public function contact_us()
    {
        return view('contact_us', []);

    }

    public function register()
    {
        return view('register', []);

    }
}
