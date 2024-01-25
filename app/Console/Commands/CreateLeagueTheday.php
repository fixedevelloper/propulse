<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use App\Models\LeagueTheday;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CreateLeagueTheday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-league-theday';

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
       $this->createLeagueOfTheDay();
    }
    function createLeagueOfTheDay(){
        $timestamp=Carbon::today()->getTimestamp();
        $fixtures=Fixture::query()->where(['day_timestamp'=>$timestamp])->distinct()->get(['league_id','day_timestamp','league_round','league_season']);
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
