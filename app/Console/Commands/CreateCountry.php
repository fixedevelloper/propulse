<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use App\Models\Team;
use App\Services\FootballAPIService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CreateCountry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-country {--league=}';


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
        $res = FootballAPIService::getTeams($this->option('league'), "2023");
        $data = $res->response;
        for ($i = 0; $i < sizeof($data); $i++) {
            $team = Team::query()->firstWhere(['team_id' => $data[$i]->team->id]);
            if (is_null($team)) {
                $team = new Team();
                $team->name = $data[$i]->team->name;
                $team->team_id = $data[$i]->team->id;
                $team->code = is_null($data[$i]->team->code) ? " " : $data[$i]->team->code;
                $team->logo = $data[$i]->team->logo;
                $team->country = $data[$i]->team->country;
                $team->founded = is_null($data[$i]->team->founded) ? 2023 : $data[$i]->team->founded;
                $team->national = $data[$i]->team->national;
                $team->save();
            }
        }
    }

}
