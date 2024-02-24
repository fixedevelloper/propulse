<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\OddDay;
use Carbon\Carbon;

class OddController extends Controller
{
    public function odds()
    {
        $odds=OddDay::query()->where('day_timestamp','=',Carbon::parse(date("Y-m-d"))->getTimestamp())->get();

        return view('odds', [
            "odds"=>$odds
        ]);

    }
}
