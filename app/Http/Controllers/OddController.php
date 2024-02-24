<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\OddDay;
use Carbon\Carbon;

class OddController extends Controller
{
    public function odds()
    {
/*        $json = \File::get('39.json');
        $arrays=json_decode($json,true);
        $reponse = $arrays['response'];
        for ($k = 0; $k < sizeof($reponse); $k++) {
            $bookmakers = $reponse[$k]['bookmakers'][0];
            if (isset($bookmakers['bets'][18])) {
                $data_home = $bookmakers['bets'][18]['values'];

                for ($i=0;$i<sizeof($data_home);$i++){
                    if ($data_home[$i]['value']=="Over 3.5"){
                        logger($data_home[$i]['odd']);
                    }
                }
            }
        }*/

        $odds=OddDay::query()
            ->where('day_timestamp','=',Carbon::parse(date("Y-m-d"))->getTimestamp())->paginate(20);

        return view('odds', [
            "odds"=>$odds
        ]);

    }
}
