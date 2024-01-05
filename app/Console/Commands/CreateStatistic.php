<?php

namespace App\Console\Commands;

use App\Helpers\Helpers;
use App\Models\Fixture;
use App\Models\Setting;
use App\Models\StatisticPosition;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CreateStatistic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-statistic';

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
        $timestamp=Carbon::parse(date('Y-m-d'))->getTimestamp();
        $fixtures=Fixture::query()->where(['day_timestamp'=>$timestamp])
            ->distinct()->get();
        //$fixtures=Fixture::all();
        $settings=Setting::all();

        foreach ($fixtures as $fixture){
            $ratio=Helpers::calculRatio($fixture);
            foreach ($settings as $setting){
                $percent=$setting->start_value;
                switch ($setting->position){
                    case "ratio_for":
                        if($ratio['ratio_a_for']==$percent || $ratio['ratio_b_for']==$percent){
                            $position=new StatisticPosition();
                            $position->position="ratio_for";
                            $position->fixture_id=$fixture->fixture_id;
                            $position->date_timestamp=$fixture->day_timestamp;
                            $position->save();
                        }
                        break;
                    case "ratio_against":
                        if($ratio['ratio_against']==$percent || $ratio['ratio_against']==$percent){
                            $position=new StatisticPosition();
                            $position->position="ratio_against";
                            $position->fixture_id=$fixture->fixture_id;
                            $position->date_timestamp=$fixture->day_timestamp;
                            $position->save();
                        }
                        break;
                    case "ratio_a_b_against":
                        if($ratio['ratio_a_b_against']==$percent || $ratio['ratio_a_b_against']==$percent){
                            $position=new StatisticPosition();
                            $position->position="ratio_a_b_against";
                            $position->fixture_id=$fixture->fixture_id;
                            $position->date_timestamp=$fixture->day_timestamp;
                            $position->save();
                        }
                        break;
                    case "ratio_a_b_for":
                        if($ratio['ratio_a_b_for']==$percent || $ratio['ratio_a_b_for']==$percent){
                            $position=new StatisticPosition();
                            $position->position="ratio_a_b_for";
                            $position->fixture_id=$fixture->fixture_id;
                            $position->date_timestamp=$fixture->day_timestamp;
                            $position->save();
                        }
                        break;
                    default :
                        break;

                }
            }

        }
    }
}
