<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use App\Services\FootballAPIService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CreateCountry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-country';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
    function createFixture()
    {

        $data = FootballAPIService::getAllFixturesBetweenDate("", "","");
        $response=$data->response;
        for ($i = 0; $i < sizeof($response); $i++) {
            $fixture=Fixture::query()->firstWhere(['fixture_id'=>$response[$i]->fixture->id]);
            if (is_null($fixture)){
                $fixture=new Fixture();

            }
            $fixture->fixture_id=$response[$i]->fixture->id;
            $fixture->referee=$response[$i]->fixture->referee;
            $fixture->timezone=$response[$i]->fixture->timezone;
            $fixture->timestamp=$response[$i]->fixture->timestamp;
            $fixture->date=$response[$i]->fixture->date;
            $fixture->st_long=$response[$i]->fixture->status->long;
            $fixture->st_short=$response[$i]->fixture->status->short;
            $fixture->st_elapsed=$response[$i]->fixture->status->elapsed;
            $fixture->league_id=$response[$i]->league->id;
            $fixture->league_season=$response[$i]->league->season;
            $fixture->league_round=$response[$i]->league->round;
            $fixture->team_home_id=$response[$i]->teams->home->id;
            $fixture->team_away_id=$response[$i]->teams->away->id;
            $fixture->team_away_winner=$response[$i]->teams->away->winner;
            $fixture->team_home_winner=$response[$i]->teams->home->winner;
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
            $date=date('Y-m-d H:m:s');
            $fixture->day_timestamp=Carbon::parse($response[$i]->fixture->date)->getTimestamp();
            $fixture->save();
        }
    }
}
