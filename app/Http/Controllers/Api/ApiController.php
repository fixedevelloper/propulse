<?php


namespace App\Http\Controllers\Api;


use App\Models\Fixture;
use App\Models\League;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class ApiController extends BaseController
{
    public function list_fixture(Request $request)
    {
        $date_ = $request->get('date');
        $timestamp = Carbon::parse($date_)->getTimestamp();
        $date_end = $request->get('date_end');
        $timestamp_end = Carbon::parse($date_end)->getTimestamp();
        $data = Fixture::query()->whereBetween("day_timestamp", [$timestamp, $timestamp_end])->whereNotIn("st_short", ["CANC", "PST"])
            ->distinct()->get();
        return $this->sendResponse($data, 'Operation successfully.');
    }
    public function list_league(Request $request)
    {
        $data = League::all();
        return $this->sendResponse($data, 'Operation successfully.');
    }
}
