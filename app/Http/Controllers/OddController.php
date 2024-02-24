<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\OddDay;
use Carbon\Carbon;

class OddController extends Controller
{
    public function odds()
    {
        $odds=OddDay::query()
            ->where('day_timestamp','=',Carbon::parse(date("Y-m-d"))->getTimestamp())->paginate(20);

        return view('odds', [
            "odds"=>$odds
        ]);

    }
}
