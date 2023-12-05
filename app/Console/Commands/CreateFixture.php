<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use App\Models\League;
use App\Models\LeagueTheday;
use App\Models\Odd;
use App\Services\FootballAPIService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CreateFixture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-fixture';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $footapiService;
    /**
     * CreateFixture constructor.
     */
    public function __construct(FootballAPIService $footapiService)
    {
        parent::__construct();
        $this->footapiService=$footapiService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        logger("----fixture create---");
        $this->createFixture();
        $this->createLeagueOfTheDay();
        logger("----end fixture create---");
    }
    function createFixture()
    {
        $leagues=League::query()->where('id','>',0)->get();
        $from=date('Y-m-d');
        $to=date('Y-m-d', strtotime($from. ' + 1 days'));
        logger($from."****".$to);
      foreach ($leagues as $league){
            $data = FootballAPIService::getAllFixturesBetweenDateWithLeague($league->league_id,$from,$to);
            $response=$data->response;
            for ($i = 0; $i < sizeof($response); $i++) {
                $fixture=Fixture::query()->firstWhere(['fixture_id'=>$response[$i]->fixture->id]);
                if (is_null($fixture)){
                    $fixture=new Fixture();
                    $fixture->league_id=$response[$i]->league->id;
                    $fixture->league_season=$response[$i]->league->season;
                    $fixture->league_round=$response[$i]->league->round;
                    $fixture->team_home_id=$response[$i]->teams->home->id;
                    $fixture->team_away_id=$response[$i]->teams->away->id;
                    $fixture->timezone=$response[$i]->fixture->timezone;
                    $fixture->timestamp=$response[$i]->fixture->timestamp;
                    $fixture->date=$response[$i]->fixture->date;
                    $fixture->fixture_id=$response[$i]->fixture->id;
                    $fixture->day_timestamp=Carbon::parse(Carbon::parse($response[$i]->fixture->date)->format('y-m-d'))->getTimestamp();

                }
                $fixture->referee=is_null($response[$i]->fixture->referee)?"":$response[$i]->fixture->referee;
                $fixture->st_long=$response[$i]->fixture->status->long;
                $fixture->st_short=$response[$i]->fixture->status->short;
                $fixture->st_elapsed=is_null($response[$i]->fixture->status->elapsed)?" ":$response[$i]->fixture->status->elapsed;
                $fixture->team_away_winner=is_null($response[$i]->teams->away->winner)?0:$response[$i]->teams->away->winner;
                $fixture->team_home_winner=is_null($response[$i]->teams->home->winner)?0:$response[$i]->teams->home->winner;
                $fixture->goal_home=$response[$i]->goals->home;
                $fixture->goal_away=$response[$i]->goals->away;
                $fixture->score_ht_home=$response[$i]->score->halftime->home;
                $fixture->score_ht_away=$response[$i]->score->halftime->away;
                $fixture->score_ft_home=$response[$i]->score->fulltime->home;
                $fixture->score_ft_away=$response[$i]->score->fulltime->away;
                $fixture->score_ext_home=$response[$i]->score->extratime->home;
                $fixture->score_ext_away=$response[$i]->score->extratime->away;
                $fixture->score_pt_home=$response[$i]->score->penalty->home;
                $fixture->score_pt_away=$response[$i]->score->penalty->away;
               $fixture->save();
            }
        }

    }

    function createOddAll(){

    }
    function createLeagueOfTheDay(){
        $timestamp=Carbon::today()->getTimestamp();
        $fixtures=Fixture::query()->where(['day_timestamp'=>$timestamp])->distinct()->get(['league_id','day_timestamp','league_round','league_season']);
       // $fixtures=Fixture::query()->distinct()->get(['league_id','day_timestamp','league_round','league_season']);
        foreach ($fixtures as $fixture){
            $league=LeagueTheday::query()->firstWhere(['league_id'=>$fixture->league_id,'timestamp'=>$fixture->day_timestamp]);
            if (is_null($league)){
                $league=new LeagueTheday();
                $league->league_id=$fixture->league_id;

           }
            $league->date=$fixture->date;
            $league->season=$fixture->league_season;
            $league->round=$fixture->league_round;
            $league->timestamp=$fixture->day_timestamp;
            $league->save();
        }
    }
}
