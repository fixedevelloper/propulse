<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\OddDay;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OddController extends Controller
{
    public function odds(Request $request)
    {
        if (is_null($request->get('date'))) {
            $date_ = Carbon::today()->format('Y-m-d');
            $timestamp = Carbon::today()->getTimestamp();
        } else {
            $date_ = $request->get('date');
            $timestamp = Carbon::parse($date_)->getTimestamp();
        }
        $request_filter = $request->get('filter');
        $odds=OddDay::query()
            ->where('day_timestamp','=',$timestamp)->paginate(20)->appends(['date' => $date_, 'act' => $request_filter]);

        return view('odds', [
            "odds"=>$odds,
            "date"=>$date_
        ]);

    }
}
