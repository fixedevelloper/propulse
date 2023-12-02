<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use App\Models\League;
use App\Models\Odd;
use App\Services\FootballAPIService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class CreateOdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-odd';

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
        $timestamp=Carbon::today()->getTimestamp();
        $leagues=Fixture::query()->where(['day_timestamp'=>$timestamp])->distinct()->get(['league_id']);;
        foreach ($leagues as $league){
            $this->createOdd($league->league->league_id);
        }
    }
    function createOdd($league_id){
        $date=date('Y-m-d');
        $season="2023";
        $res=FootballAPIService::getAllBetOddvalue1xbetAllByleague($league_id,$season,$date);
        $reponse=$res->response;
        logger(sizeof($reponse));
        for ($k=0;$k<sizeof($reponse);$k++){
            $fixture=Fixture::query()->firstWhere(['fixture_id'=>$reponse[$k]->fixture->id]);
            if (isset($fixture)){
                $odd=Odd::query()->firstWhere(['fixture_id'=>$fixture->id]);
                if (is_null($odd)){
                    $odd=new Odd();
                    $odd->fixture_id=$fixture->id;
                    $odd->league_id=$reponse[$k]->league->id;
                }
                $bookmakers=$reponse[$k]->bookmakers[0];
                $data=$bookmakers->bets[0]->values;
                $odd->mt_win_home=$data[0]->odd;
                $odd->mt_win_away=$data[1]->odd;
                $odd->mt_draw=$data[2]->odd;
                if (isset($bookmakers->bets[7])){
                    $data2_marque=$bookmakers->bets[7]->values;
                    $odd->both_score_yes=$data2_marque[0]->odd;
                    $odd->both_score_no=$data2_marque[1]->odd;
                }

                $odd->save();
            }

        }

    }
}
