<?php


namespace App\Helpers;


use App\Models\Fixture;
use App\Models\Stadings;
use App\Models\Team;
use Carbon\Carbon;

class Helpers
{
    static function makeTime($fixture)
    {
        $today = date('y-m-d');
        $today_timestamp = Carbon::parse($today)->getTimestamp();
        if ($today_timestamp == $fixture->day_timestamp) {
            if ($fixture->st_short == "NS") {
                return "Today/" . Carbon::parse($fixture->date)->format('h:i:s');
            } elseif ($fixture->st_short == "FT") {
                return "FT";
            } else {
                return $fixture->st_short;
            }
        } else {
            return $fixture->st_short;
        }

    }
    static function rankTeam($fixture){
        $standing=Stadings::query()->firstWhere(['team_id'=>$fixture->team_id,'league_id'=>$fixture->league_id]);
        return $standing;
    }
    static function teamFormArray($form){
        $arrays=str_split($form);
        return $arrays;
    }
    static function fixtureOfDayByLeague($league){
        $fixtures=Fixture::query()->where(['league_id'=>$league])->get();
        return $fixtures;
    }
    static function getTeamByID($team_id)
    {
        $team=Team::query()->firstWhere(['team_id' => $team_id]);
        return [
            'name'=>is_null($team)?"":$team->name,
            'logo'=>is_null($team)?"":$team->logo,
        ];
    }
    static function calculPointHome($stading){
        return $stading->home_win*3 + $stading->home_draw;
    }
}
