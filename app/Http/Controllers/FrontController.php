<?php


namespace App\Http\Controllers;


use App\Helpers\Helpers;
use App\Models\Country;
use App\Models\Fixture;
use App\Models\League;
use App\Models\LeagueTheday;
use App\Models\RatioFixture;
use App\Models\Setting;
use App\Models\Stadings;
use App\Models\StatisticPosition;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    public function home(Request $request)
    {
        if (!is_null($request->rang)) {
            $rang = $request->rang;
        }
        if (is_null($request->get('date'))) {
            $date_ = Carbon::today()->format('Y-m-d');
            $timestamp = Carbon::today()->getTimestamp();
        } else {
            $date_ = $request->get('date');
            $timestamp = Carbon::parse($date_)->getTimestamp();
        }


        if ($request->get('act') == "live") {

            $leagues = Fixture::query()->where(['day_timestamp' => $timestamp])->whereIn('st_short', ['1H', '2H'])
                ->distinct()->paginate(12, ['league_id', 'league_round', 'league_season'])
                ->appends(['date' => $date_, 'act' => $request->get('act'), 'rang' => $request->rang]);
        } else {

            /*    $leagues=Fixture::query()->select(['league_id','league_round','league_season'])->where(['day_timestamp'=>$timestamp])
                    ->orderBy('league_id','asc')
                    //->(['league_id'])
                    ->distinct()->paginate(12,['league_id'])->appends(['date'=>$date_,'act'=>$request->get('act')])
                ;
                */
            $leagues = LeagueTheday::query()->leftJoin('leagues', 'leagues.league_id', "=", 'league_thedays.league_id')
                ->where(['timestamp' => $timestamp])
                ->orderBy('leagues.league_id', 'asc')
                ->distinct()->paginate(12)->appends(['date' => $date_, 'act' => $request->get('act'),
                    'rang' => $request->rang]);

        }


        return view('home', [
            "leagues" => $leagues,
            'date' => $date_,
            'rang' => $request->rang
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
        $stadings_home = [];
        if ($request->has('country')) {
            $leagues = League::query()->where(['country_code' => $request->get('country')])->get();
            $country = Country::query()->firstWhere(['code' => $request->get('country')]);
        }
        if ($request->has('league')) {
            $stadings = Stadings::query()->where(['league_id' => $request->get('league')])->get();
            $stadings_home = Stadings::query()->where(['league_id' => $request->get('league')])->orderByDesc('home_win')->get();
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

    public function ontheday_multi_color(Request $request)
    {
        if (is_null($request->get('date'))) {
            $date_ = Carbon::today()->format('Y-m-d');
            $timestamp = Carbon::today()->getTimestamp();
            $date_end = Carbon::today()->format('Y-m-d');
            $timestamp_end = Carbon::today()->getTimestamp();
        } else {
            $date_ = $request->get('date');
            $timestamp = Carbon::parse($date_)->getTimestamp();
            $date_end = $request->get('date_end');
            $timestamp_end = Carbon::parse($date_end)->getTimestamp();
        }
        $request_filter = $request->get('percent');
        $request_save = $request->get('save_input');
        if (isset($request_save) && $request_save == 0) {
            $fixtures = Fixture::query()->whereBetween("day_timestamp", [$timestamp, $timestamp_end])->whereNotIn("st_short", ["CANC", "PST"])
                ->distinct()->get();
            $fixture_filter = [];
            $percent = $request->get('percent');
            foreach ($fixtures as $fixture) {
                $ratio = Helpers::calculRatio($fixture);
                if (($ratio['ratio_a_b_for'] > 0 && $ratio['ratio_a_b_against'] < 0) || ($ratio['ratio_a_b_for'] < 0 && $ratio['ratio_a_b_against'] > 0)) {
                    if ($ratio['ratio_a_b_for'] >= $percent || $ratio['ratio_a_b_against'] >= $percent) {
                        $fixture_filter[] = $fixture->id;

                    }
                }
            }
            $fixtures = Fixture::query()->whereBetween("day_timestamp", [$timestamp, $timestamp_end])->whereNotIn("st_short", ["CANC", "PST"])
                ->whereIn('id', $fixture_filter)->paginate(12)->appends(['date' => $date_, 'save_input' => $request_save, 'percent' => $percent, 'date_end' => $date_end]);
            return view('onthedaymulticolor', [
                'fixtures' => $fixtures,
                'date' => $date_,
                'date_fin' => $date_end,
                'search' => $percent
            ]);
        }
        if (isset($request_save) && $request_save == 1) {
            $fixtures = Fixture::query()->whereBetween("day_timestamp", [$timestamp, $timestamp_end])->whereNotIn("st_short", ["CANC", "PST"])
                ->distinct()->get();
            $fixture_filter = [];
            $percent = $request->get('percent');
            foreach ($fixtures as $fixture) {
                $ratio = Helpers::calculRatio($fixture);
                if (($ratio['ratio_a_b_for'] > 0 && $ratio['ratio_a_b_against'] < 0) || ($ratio['ratio_a_b_for'] < 0 && $ratio['ratio_a_b_against'] > 0)) {
                    if ($ratio['ratio_a_b_for'] >= $percent || $ratio['ratio_a_b_against'] >= $percent) {
                        $fixture_filter[] = $fixture->id;
                        $ratio_fixture = RatioFixture::query()->firstWhere(['fixture_id' => $fixture->id, 'percent' => $percent]);
                        if (is_null($ratio_fixture)) {
                            $ratio_fixture = new RatioFixture();
                            $ratio_fixture->fixture_id = $fixture->id;
                            $ratio_fixture->ratio_a_b_for = $ratio['ratio_a_b_for'];
                            $ratio_fixture->ratio_a_b_against = $ratio['ratio_a_b_against'];
                            $ratio_fixture->percent = $percent;
                            $ratio_fixture->save();
                        }
                    }
                }
            }
        }
        $fixtures = Fixture::query()->where(['day_timestamp' => $timestamp])->whereNotIn("st_short", ["CANC", "PST"])
            ->distinct()->paginate(12)->appends(['date' => $date_, 'percent' => "", 'date_end' => $date_end]);

        return view('onthedaymulticolor', [
            'fixtures' => $fixtures,
            'date' => $date_,
            'date_fin' => $date_end,
            'search' => ""
        ]);

    }

    public function ontheday(Request $request)
    {
        if (is_null($request->get('date'))) {
            $date_ = Carbon::today()->format('Y-m-d');
            $timestamp = Carbon::today()->getTimestamp();
        } else {
            $date_ = $request->get('date');
            $timestamp = Carbon::parse($date_)->getTimestamp();
        }
        $request_filter = $request->get('filter');
        if (isset($request_filter)) {

            $fixtures = Fixture::query()->where(['day_timestamp' => $timestamp])->whereNotIn("st_short", ["CANC", "PST"])
                ->distinct()->get();
            $fixture_filter = [];
            $filter = $request->get('filter');
            $percent = $request->get('percent');
            foreach ($fixtures as $fixture) {
                $ratio = Helpers::calculRatio($fixture);
                // logger($ratio);
                if ($filter == "ratio_for") {
                    if ($ratio['ratio_a_for'] == $percent || $ratio['ratio_b_for'] == $percent) {
                        logger('****' . $ratio['ratio_a_for']);
                        $fixture_filter[] = $fixture->id;

                    }
                }
                if ($filter == "ratio_against") {
                    logger('###############' . $ratio['ratio_a_against']);
                    if ($ratio['ratio_a_against'] == $percent || $ratio['ratio_b_against'] == $percent) {
                        logger('****' . $ratio['ratio_a_against']);
                        $fixture_filter[] = $fixture->id;

                    }
                }
                if ($filter == "ratio_a_b_against") {
                    logger("**********************" . $percent);
                    if ($ratio['ratio_a_b_against'] === $percent) {
                        $fixture_filter[] = $fixture->id;

                    }
                }
                if ($filter == "ratio_a_b_for") {
                    if ($ratio['ratio_a_b_for'] === $percent) {
                        $fixture_filter[] = $fixture->id;

                    }
                }
            }
            $fixtures = Fixture::query()->where(['day_timestamp' => $timestamp])->whereNotIn("st_short", ["CANC", "PST"])
                ->whereIn('id', $fixture_filter)->paginate(12)->appends(['date' => $date_, 'act' => $request_filter]);
            return view('ontheday', [
                'fixtures' => $fixtures,
                'date' => $date_
            ]);
        }
        $fixtures = Fixture::query()->where(['day_timestamp' => $timestamp])->whereNotIn("st_short", ["CANC", "PST"])
            ->distinct()->paginate(12)->appends(['date' => $date_, 'act' => $request_filter]);

        return view('ontheday', [
            'fixtures' => $fixtures,
            'date' => $date_
        ]);

    }

    public function sportbetting()
    {
        return view('sportbetting', []);

    }

    public function evenements()
    {
        $countries = Country::all();
        return view('evenements', [
            'countries' => $countries
        ]);

    }

    public function score_statistic(Request $request)
    {
        $data = [];

        $scores = StatisticPosition::query()->where('position', '=', $request->get('filter'))->get();
        foreach ($scores as $score) {
            $fixture = Fixture::query()
                ->firstWhere(['fixture_id' => $score->fixture_id]);
            $data[] = $fixture->goal_home . '-' . $fixture->goal_away;
        }
        $data = array_count_values($data);
        logger($data);


        return view('score_statistic', [
            'scores' => $data,
            'filter_value' => $request->get('filter')
        ]);

    }

    public function setting(Request $request)
    {
        if ($request->method() == "POST") {
            $setting = Setting::query()->firstWhere(['title' => $request->get('title')]);
            if (is_null($setting)) {
                $setting = new Setting();
                $setting->title = $request->get('title');
            }
            $setting->position = $request->get('position');
            $setting->start_value = $request->get('value_start');
            $setting->save();
        }
        $settings = Setting::query()->where("id", ">", "0")->paginate(12);
        return view('settings', [
            'settings' => $settings
        ]);

    }

    public function statistics(Request $request)
    {
        $start_date = Carbon::parse($request->get('start_date'))->getTimestamp();
        $end_date = Carbon::parse($request->get('end_date'))->getTimestamp();
        $position = $request->get('position');
        $fixtures = [];
        if ($position) {
            $fixtures = Fixture::query()->whereNotIn("st_short", ["CANC", "PST"])
                ->select(DB::raw('count(*) as num'), 'goal_home', 'goal_away')
                ->whereBetween('day_timestamp', [$start_date, $end_date])
                ->groupBy(['goal_home', 'goal_away'])->get();
        }
        // logger($fixtures);
        return view('statistics', [
            'fixtures' => $fixtures
        ]);

    }

    public function setting_page(Request $request)
    {
        if (is_null($request->get('date'))) {
            $date_ = Carbon::today()->format('Y-m-d');
            $timestamp = Carbon::today()->getTimestamp();
        } else {
            $date_ = $request->get('date');
            $timestamp = Carbon::parse($date_)->getTimestamp();
        }
        $setting = Setting::query()->find(1);
        $fixtures = Fixture::query()->where(['day_timestamp' => $timestamp])->whereNotIn("st_short", ["CANC", "PST"])
            ->distinct()->get();
        $fixture_filter = [];
        $percent = $setting->start_value;
        foreach ($fixtures as $fixture) {
            $ratio = Helpers::calculRatio($fixture);
            if ($request->position == "ratio_a_b_for" || $request->position == "ratio_a_b_against") {
                if ($ratio['ratio_a_b_for'] < $percent || $ratio['ratio_a_b_against'] < $percent) {
                    $fixture_filter[] = $fixture->id;

                }
            }
            if ($request->position == "ratio_for") {
                if ($ratio['ratio_b_for'] < $percent || $ratio['ratio_a_for'] < $percent) {
                    $fixture_filter[] = $fixture->id;

                }
            }
            if ($request->position == "ratio_against") {
                if ($ratio['ratio_a_against'] < $percent || $ratio['ratio_b_against'] < $percent) {
                    $fixture_filter[] = $fixture->id;

                }
            }
        }
        $fixtures = Fixture::query()->where(['day_timestamp' => $timestamp])->whereNotIn("st_short", ["CANC", "PST"])
            ->whereIn('id', $fixture_filter)->paginate(12)->appends(['date' => $date_]);
        return view('setting_page', [
            "fixtures" => $fixtures,
            'date' => $date_
        ]);

    }

    public function eventAfterGame(Request $request)
    {
        $fixture = Fixture::query()->firstWhere('fixture_id', '=', $request->get('id'));
        logger($fixture);
        $team_home_id = $fixture->team_home_id;
        $team_away_id = $fixture->team_away_id;
        $standing_home = Helpers::rankTeam($fixture);
        $standing_away = Helpers::rankTeamAway($fixture);

        $last_home = str_split($standing_home->form);
        $last_home_ = $last_home[0];
        $last_away = str_split($standing_away->form);
        $last_away_ = $last_away[0];
        logger($last_home_);
        switch ($last_home_) {
            case "W":
                $restArrays = Helpers::eventAfterGameWin($team_home_id, $fixture->day_timestamp);
                break;
            case "L":
                $restArrays = Helpers::eventAfterGameLost($team_home_id, $fixture->day_timestamp);
                break;
            case "D":
                $restArrays = Helpers::eventAfterGameDraw($team_home_id, $fixture->day_timestamp);
                break;
            default:
                 $restArrays=Helpers::eventAfterGameDraw($team_home_id,$fixture->day_timestamp);
                break;
        }
        /*  if ($last_home_=="W"){
            $restArrays=Helpers::eventAfterGameWin($team_home_id,$fixture->day_timestamp);
          }elseif ($last_home_=="L"){
              $restArrays=Helpers::eventAfterGameLost($team_home_id,$fixture->day_timestamp);
          }else{
              $restArrays=Helpers::eventAfterGameDraw($team_home_id,$fixture->day_timestamp);
          }*/
    /*    if ($last_away_ == "W") {
            $restArrays_away = Helpers::eventAfterGameWin($team_away_id, $fixture->day_timestamp);
        } elseif ($last_away_ == "L") {
            $restArrays_away = Helpers::eventAfterGameLost($team_away_id, $fixture->day_timestamp);
        } else {
            $restArrays_away = Helpers::eventAfterGameDraw($team_away_id, $fixture->day_timestamp);
        }*/
        logger($last_away_);
        switch ($last_away_){
            case "W":
                $restArrays_away = Helpers::eventAfterGameWin($team_away_id, $fixture->day_timestamp);
                break;
            case "L":
                logger("lost");
                $restArrays_away = Helpers::eventAfterGameLost($team_away_id, $fixture->day_timestamp);
                break;
            case "D":
                $restArrays_away = Helpers::eventAfterGameDraw($team_away_id, $fixture->day_timestamp);
                break;
            default:
                $restArrays_away=Helpers::eventAfterGameDraw($team_away_id,$fixture->day_timestamp);
                break;
        }
        dump($restArrays["list_game"]);
        return view('event_after', [
            'team_home' => Team::query()->firstWhere(['team_id' => $team_home_id]),
            'team_away' => Team::query()->firstWhere(['team_id' => $team_away_id]),
            'home_lastgame'=>$last_home_,
            'away_lastgame'=>$last_away_,
            'home' => $restArrays,
            'away' => $restArrays_away
        ]);

    }

    public function dashboard()
    {
        if (!Auth::authenticate()) {
            return redirect()->route('login');
        }
        return view('dashboard', []);

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

    public function statistic_event(Request $request)
    {
        $selects = RatioFixture::query()->select(['percent'])->distinct()->get();
        $request_filter = $request->get('filter');
        $ratios = [];
        $s_05 = 0;
        $s_15 = 0;
        $s_25 = 0;
        $s_35 = 0;
        $s_45 = 0;

        $win_home = 0;
        $win_away = 0;
        $draw = 0;
        $score_0_0 = 0;
        $score_0_1 = 0;
        $score_0_2 = 0;
        $score_0_3 = 0;
        $score_0_4 = 0;
        $score_0_5 = 0;

        $score_1_0 = 0;
        $score_1_1 = 0;
        $score_1_2 = 0;
        $score_1_3 = 0;
        $score_1_4 = 0;
        $score_1_5 = 0;

        $score_2_0 = 0;
        $score_2_1 = 0;
        $score_2_2 = 0;
        $score_2_3 = 0;
        $score_2_4 = 0;
        $score_2_5 = 0;

        $score_3_0 = 0;
        $score_3_1 = 0;
        $score_3_2 = 0;
        $score_3_3 = 0;
        $score_3_4 = 0;
        $score_3_5 = 0;

        $score_4_0 = 0;
        $score_4_1 = 0;
        $score_4_2 = 0;
        $score_4_3 = 0;
        $score_4_4 = 0;
        $score_4_5 = 0;

        $score_5_0 = 0;
        $score_5_1 = 0;
        $score_5_2 = 0;
        $score_5_3 = 0;
        $score_5_4 = 0;
        $score_5_5 = 0;

        $p_45 = 0;
        if (isset($request_filter)) {
            $ratios = RatioFixture::query()->where(['percent' => $request_filter])
                ->leftJoin('fixtures', 'fixtures.id', '=', 'ratio_fixtures.fixture_id')->whereNotIn("st_short", ["CANC", "PST", "NS"])->get();
            foreach ($ratios as $ratio) {
                $total_goal = $ratio->goal_home + $ratio->goal_away;
                if ($total_goal > 0.5) {
                    $s_05 += 1;
                }
                if ($total_goal > 1.5) {
                    $s_15 += 1;
                }
                if ($total_goal > 2.5) {
                    $s_25 += 1;
                }
                if ($total_goal > 3.5) {
                    $s_35 += 1;
                }
                if ($total_goal > 4.5) {
                    $s_45 += 1;
                }
                if ($ratio->goal_home > $ratio->goal_away) {
                    $win_home += 1;
                }
                if ($ratio->goal_away > $ratio->goal_home) {
                    $win_away += 1;
                }
                if ($ratio->goal_away == $ratio->goal_home) {
                    $draw += 1;
                }
                /** score exacte */
                if ($ratio->goal_home == 1 && $ratio->goal_away == 0) {
                    $score_1_0 += 1;
                }
                if ($ratio->goal_home == 1 && $ratio->goal_away == 1) {
                    $score_1_1 += 1;
                }
                if ($ratio->goal_home == 1 && $ratio->goal_away == 2) {
                    $score_1_2 += 1;
                }
                if ($ratio->goal_home == 1 && $ratio->goal_away == 3) {
                    $score_1_3 += 1;
                }
                if ($ratio->goal_home == 1 && $ratio->goal_away == 4) {
                    $score_1_4 += 1;
                }
                if ($ratio->goal_home == 1 && $ratio->goal_away == 5) {
                    $score_1_5 += 1;
                }


                if ($ratio->goal_home == 2 && $ratio->goal_away == 0) {
                    $score_2_0 += 1;
                }
                if ($ratio->goal_home == 2 && $ratio->goal_away == 1) {
                    $score_2_1 += 1;
                }
                if ($ratio->goal_home == 2 && $ratio->goal_away == 2) {
                    $score_2_2 += 1;
                }
                if ($ratio->goal_home == 2 && $ratio->goal_away == 3) {
                    $score_2_3 += 1;
                }
                if ($ratio->goal_home == 2 && $ratio->goal_away == 4) {
                    $score_2_4 += 1;
                }
                if ($ratio->goal_home == 2 && $ratio->goal_away == 5) {
                    $score_2_5 += 1;
                }


                if ($ratio->goal_home == 3 && $ratio->goal_away == 0) {
                    $score_3_0 += 1;
                }
                if ($ratio->goal_home == 3 && $ratio->goal_away == 1) {
                    $score_3_1 += 1;
                }
                if ($ratio->goal_home == 3 && $ratio->goal_away == 2) {
                    $score_3_2 += 1;
                }
                if ($ratio->goal_home == 3 && $ratio->goal_away == 3) {
                    $score_3_3 += 1;
                }
                if ($ratio->goal_home == 3 && $ratio->goal_away == 4) {
                    $score_3_4 += 1;
                }
                if ($ratio->goal_home == 3 && $ratio->goal_away == 5) {
                    $score_3_5 += 1;
                }


                if ($ratio->goal_home == 4 && $ratio->goal_away == 0) {
                    $score_4_0 += 1;
                }
                if ($ratio->goal_home == 4 && $ratio->goal_away == 1) {
                    $score_4_1 += 1;
                }
                if ($ratio->goal_home == 4 && $ratio->goal_away == 2) {
                    $score_4_2 += 1;
                }
                if ($ratio->goal_home == 4 && $ratio->goal_away == 3) {
                    $score_4_3 += 1;
                }
                if ($ratio->goal_home == 4 && $ratio->goal_away == 4) {
                    $score_4_4 += 1;
                }
                if ($ratio->goal_home == 4 && $ratio->goal_away == 5) {
                    $score_4_5 += 1;
                }

                if ($ratio->goal_home == 5 && $ratio->goal_away == 0) {
                    $score_5_0 += 1;
                }
                if ($ratio->goal_home == 5 && $ratio->goal_away == 1) {
                    $score_5_1 += 1;
                }
                if ($ratio->goal_home == 5 && $ratio->goal_away == 2) {
                    $score_5_2 += 1;
                }
                if ($ratio->goal_home == 5 && $ratio->goal_away == 3) {
                    $score_5_3 += 1;
                }
                if ($ratio->goal_home == 5 && $ratio->goal_away == 4) {
                    $score_5_4 += 1;
                }
                if ($ratio->goal_home == 5 && $ratio->goal_away == 5) {
                    $score_5_5 += 1;
                }


            }

        }
        return view('statistic_event', [
            "selects" => $selects,
            "ratios" => $ratios,
            'total' => sizeof($ratios),
            's_05' => $s_05,
            's_15' => $s_15,
            's_25' => $s_25,
            's_35' => $s_35,
            's_45' => $s_45,
            'win_home' => $win_home,
            'win_away' => $win_away,
            'draw' => $draw,
            'filter' => $request_filter,
            'score_1_0' => $score_1_0,
            'score_1_1' => $score_1_1,
            'score_1_2' => $score_1_2,
            'score_1_3' => $score_1_3,
            'score_1_4' => $score_1_4,
            'score_1_5' => $score_1_5,

            'score_2_0' => $score_2_0,
            'score_2_1' => $score_2_1,
            'score_2_2' => $score_2_2,
            'score_2_3' => $score_2_3,
            'score_2_4' => $score_2_4,
            'score_2_5' => $score_2_5,

            'score_3_0' => $score_3_0,
            'score_3_1' => $score_3_1,
            'score_3_2' => $score_3_2,
            'score_3_3' => $score_3_3,
            'score_3_4' => $score_3_4,
            'score_3_5' => $score_3_5,

            'score_4_0' => $score_4_0,
            'score_4_1' => $score_4_1,
            'score_4_2' => $score_4_2,
            'score_4_3' => $score_4_3,
            'score_4_4' => $score_4_4,
            'score_4_5' => $score_4_5,

            'score_5_0' => $score_5_0,
            'score_5_1' => $score_5_1,
            'score_5_2' => $score_5_2,
            'score_5_3' => $score_5_3,
            'score_5_4' => $score_5_4,
            'score_5_5' => $score_5_5,

            'score_0_0' => $score_0_0,
            'score_0_1' => $score_0_1,
            'score_0_2' => $score_0_2,
            'score_0_3' => $score_0_3,
            'score_0_4' => $score_0_4,
            'score_0_5' => $score_0_5,
        ]);

    }

    public function contact_us()
    {
        return view('contact_us', []);

    }

    public function register()
    {
        return view('register', []);

    }

    public function getLeague(Request $request)
    {
        $leagues = League::query()->where(['country_code' => $request->get('country')])->get();
        return response()->json($leagues);
    }

    public function getTeams(Request $request)
    {
        $standings = Stadings::query()->where(['league_id' => $request->get('league')])->get();
        $teams = [];
        foreach ($standings as $league) {
            $teams[] = Team::query()->firstWhere(['team_id' => $league->team_id]);
        }
        return response()->json($teams);

    }
}
