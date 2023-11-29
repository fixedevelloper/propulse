<?php

namespace App\Console\Commands;

use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Stadings;
use App\Models\Team;
use App\Services\FootballAPIService;
use Illuminate\Console\Command;

class CreateStanding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-standing';

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
        $this->standing();
    }
    function standing(){
        //$leagues = League::query()->where(['type'=>'League'])->get();
        $season="2023";
        $leagues = LeagueSeason::query()
            ->leftJoin('leagues','leagues.id','=','league_seasons.league_id')
            ->where(['leagues.type'=>'League','year'=>$season])->get();

        try {
            foreach ($leagues as $league) {
                $res = FootballAPIService::getStatdings($league->league->league_id, $season);
                if (sizeof($res->response[0]->league->standings)>0){
                    $data = $res->response[0]->league->standings[0];
                    logger(sizeof($data));
                    for ($i = 0; $i < sizeof($data); $i++) {
                        $stading = Stadings::query()->firstWhere(['league_id' => $league->league_id,'team_id'=>$data[$i]->team->id,'season'=>$season]);
                        if (is_null($stading)) {
                            $stading = new Stadings();
                            $stading->league_id=$league->league_id;
                            $stading->team_id=$data[$i]->team->id;
                            $stading->season=$season;
                            $stading->group=$data[$i]->group;
                            $stading->rank=$data[$i]->rank;
                            $stading->points=$data[$i]->points;
                            $stading->goal_diff=$data[$i]->goalsDiff;
                            $stading->status=$data[$i]->status;
                            $stading->home_played=$data[$i]->home->played;
                            $stading->home_win=$data[$i]->home->win;
                            $stading->home_lost=$data[$i]->home->lose;
                            $stading->home_draw=$data[$i]->home->draw;
                            $stading->home_goal_for=$data[$i]->home->goals->for;
                            $stading->home_goal_against=$data[$i]->home->goals->against;
                            //$stading->update_round=date('Y-m-d',date_timestamp_get($data[$i]->update));
                            $stading->away_played=$data[$i]->away->played;
                            $stading->away_win=$data[$i]->away->win;
                            $stading->away_lost=$data[$i]->away->lose;
                            $stading->away_draw=$data[$i]->away->draw;
                            $stading->away_goal_for=$data[$i]->away->goals->for;
                            $stading->away_goal_against=$data[$i]->away->goals->against;
                            $stading->form=$data[$i]->form;
                        }$stading->save();
                    }
                }

            }
        }catch (\Exception $exception){
            logger($exception->getMessage());
        }


    }
}
