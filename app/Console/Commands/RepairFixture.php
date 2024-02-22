<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use App\Services\FootballAPIService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RepairFixture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:repair-fixture';

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
        $this->getFixtureNoFt();
    }
   function getFixtureNoFt(){
        $fixtures=Fixture::query()->whereNotIn('st_short', ['FT'])->get();
        foreach ($fixtures as $fixture){
            $data = FootballAPIService::getFixtureById($fixture->fixture_id);
            $response=$data->response[0];
            $fixture->st_long=$response->fixture->status->long;
            $fixture->st_short=$response->fixture->status->short;
            $fixture->st_elapsed=is_null($response->fixture->status->elapsed)?" ":$response->fixture->status->elapsed;
            $fixture->team_away_winner=is_null($response->teams->away->winner)?0:$response->teams->away->winner;
            $fixture->team_home_winner=is_null($response->teams->home->winner)?0:$response->teams->home->winner;
            $fixture->goal_home=$response->goals->home;
            $fixture->goal_away=$response->goals->away;
            $fixture->score_ht_home=$response->score->halftime->home;
            $fixture->score_ht_away=$response->score->halftime->away;
            $fixture->score_ft_home=$response->score->fulltime->home;
            $fixture->score_ft_away=$response->score->fulltime->away;
            $fixture->score_ext_home=$response->score->extratime->home;
            $fixture->score_ext_away=$response->score->extratime->away;
            $fixture->score_pt_home=$response->score->penalty->home;
            $fixture->score_pt_away=$response->score->penalty->away;
            $fixture->save();
        }
   }
}
