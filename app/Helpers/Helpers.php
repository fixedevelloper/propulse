<?php


namespace App\Helpers;


use App\Models\Fixture;
use App\Models\Odd;
use App\Models\Stadings;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class Helpers
{
    static function odd($fixture_id)
    {
        $odd = Odd::query()->firstWhere(['fixture_id' => $fixture_id]);
        return $odd;
    }

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

    static function calculRatio($fixture)
    {
        $standing_home = Stadings::query()->firstWhere(['team_id' => $fixture->team_home_id, 'league_id' => $fixture->league_id]);
        $standing_away = Stadings::query()->firstWhere(['team_id' => $fixture->team_away_id, 'league_id' => $fixture->league_id]);
        $mp = is_null($standing_home) ? 0 : $standing_home->home_played + $standing_home->away_played;
        $mp_anay = is_null($standing_away) ? 0 : $standing_away->home_played + $standing_away->away_played;
        if ($mp > 0) {
            $ratio_a_for = is_null($standing_home) ? 0 : round(($standing_home->goal_home_for + $standing_home->goal_away_for) / ($mp), 2);
            $ratio_a_against = is_null($standing_home) ? 0 : round(($standing_home->goal_away_against + $standing_home->goal_away_against) / ($mp), 2);

        } else {
            $ratio_a_for = 0;
            $ratio_a_against = 0;

        }
        if ($mp_anay > 0) {
            $ratio_b_for = is_null($standing_away) ? 0 : round(($standing_away->goal_home_for + $standing_away->goal_away_for) / ($mp_anay), 2);
            $ratio_b_against = is_null($standing_away) ? 0 : round(($standing_away->goal_away_against + $standing_away->goal_away_against) / ($mp_anay), 2);

        } else {

            $ratio_b_for = 0;
            $ratio_b_against = 0;

        }
        return [
            'ratio_a_for' => $ratio_a_for,
            'ratio_b_for' => $ratio_b_for,
            'ratio_a_b_for' => round($ratio_a_for - $ratio_b_for, 2),
            'ratio_a_against' => $ratio_a_against,
            'ratio_b_against' => $ratio_b_against,
            'ratio_a_b_against' => round($ratio_a_against - $ratio_b_against, 2),
        ];
    }

    static function teamFormArray($form)
    {
        $arrays = str_split($form);
        return $arrays;
    }

    static function fixtureOfDayByLeague($league, $time, $rang)
    {
        $arrays = [];
        $fixtures = Fixture::query()->where(['league_id' => $league, 'day_timestamp' => $time])->get();
        if (!is_null($rang)) {
            foreach ($fixtures as $fixture) {
                $home = self::rankTeam($fixture);
                $away = self::rankTeamAway($fixture);
                if (!is_null($home) && !is_null($away)) {
                    if ($home->rank == $rang || $away->rank == $rang) {
                        $arrays[] = $fixture;
                    }
                }

            }
        } else {
            $arrays = $fixtures;
        }
        return $arrays;
    }

    static function rankTeam($fixture)
    {
        $standing = Stadings::query()->firstWhere(['team_id' => $fixture->team_home_id, 'league_id' => $fixture->league_id]);
        return $standing;
    }

    static function rankTeamAway($fixture)
    {
        $standing = Stadings::query()->firstWhere(['team_id' => $fixture->team_away_id, 'league_id' => $fixture->league_id]);
        return $standing;
    }

    static function getTeamByID($team_id)
    {
        $team = Team::query()->firstWhere(['team_id' => $team_id]);
        return [
            'name' => is_null($team) ? "" : $team->name,
            'logo' => is_null($team) ? "" : $team->logo,
        ];
    }

    static function calculPointHome($stading)
    {
        return $stading->home_win * 3 + $stading->home_draw;
    }

    static function eventAfterGameWin($team_id, $day_timestamp)
    {
        $game_wins = [];
        $game_draws = [];
        $game_losts = [];
        $total_win_home = 0;
        $total_lost_home = 0;
        $total_draw_home = 0;
        /* $listgames=Fixture::query()->where(['team_home_id'=>$team_id,'team_home_winner'=>true])
             ->orWhere(['team_away_id'=>$team_id,'team_away_winner'=>true])->orderByDesc('id')->get();*/
        $listgames = Fixture::query()->where('day_timestamp', '<', $day_timestamp)
            ->where(function (Builder $builder) use ($team_id) {
                $builder->where('team_home_id', '=', $team_id)
                    ->where('team_home_winner', '=', 1);
            })->orWhere(function (Builder $builder) use ($team_id) {
                $builder->where('team_away_id', '=', $team_id)
                    ->where('team_away_winner', '=', 1);
            })->get();
        //  logger($listgames);
        foreach ($listgames as $item) {
            logger("item after game:" . $item->fixture_id);
            $lastgameafter = Fixture::query()->firstWhere(function (Builder $builder) use ($item, $team_id) {
                $builder->where('day_timestamp', '>', $item->day_timestamp)
                    ->where('team_home_id', '=', $team_id)
                    ->orWhere('team_away_id', '=', $team_id)->orderBy('day_timestamp', 'desc');
            });
            if ($lastgameafter instanceof Fixture) {
                logger($lastgameafter->fixture_id . ': score' . $lastgameafter->score_ft_home . '-' . $lastgameafter->score_ft_away);
                if ($lastgameafter->team_home_winner == 1) {
                    $total_win_home++;
                    $game_wins[] = $lastgameafter;
                } elseif ($lastgameafter->team_away_winner == 1) {
                    $total_lost_home++;
                    $game_losts[] = $lastgameafter;
                } else {
                    $total_draw_home++;
                    $game_draws[] = $lastgameafter;
                }
            }
        }
        return [
            'list_game'=>$listgames,
            'win' => $total_win_home,
            'lost' => $total_lost_home,
            'draw' => $total_draw_home
        ];
    }

    static function eventAfterGameLost($team_id, $day_timestamp)
    {
        $total_win_home = 0;
        $total_lost_home = 0;
        $total_draw_home = 0;
        $listgames = Fixture::query()->where('day_timestamp', '<', $day_timestamp)
            ->where(function (Builder $builder) use ($team_id) {
                $builder->where('team_home_id', '=', $team_id)
                    ->where('team_home_winner', '=', false);
            })->orWhere(function (Builder $builder) use ($team_id) {
                $builder->where('team_away_id', '=', $team_id)
                    ->where('team_away_winner', '=', false);
            })->get();
       // logger($listgames);

        foreach ($listgames as $item) {
           /* $lastgameafter = Fixture::query()->where('team_home_id', '=', $team_id)
                ->orWhere(['team_away_id' => $team_id])->where('day_timestamp', '<', $item->day_timestamp)->limit(1);
            */
            $lastgameafter = Fixture::query()->firstWhere(function (Builder $builder) use ($item, $team_id) {
                $builder->where('day_timestamp', '>', $item->day_timestamp)
                    ->where('st_short','=','FT')
                    ->where('team_home_id', '=', $team_id)
                    ->orWhere('team_away_id', '=', $team_id);
            });
            if ($lastgameafter instanceof Fixture) {
                logger($lastgameafter->fixture_id . ': score after lost' . $lastgameafter->score_ft_home . '-' . $lastgameafter->score_ft_away);
                if ($lastgameafter->team_home_winner == true) {
                    $total_win_home++;
                } elseif ($lastgameafter->team_away_winner == true) {
                    $total_lost_home++;
                } else {
                    $total_draw_home++;
                }
            }
        }
        return [
            'list_game'=>$listgames,
            'win' => $total_win_home,
            'lost' => $total_lost_home,
            'draw' => $total_draw_home
        ];
    }

    static function eventAfterGameDraw($team_id, $day_timestamp)
    {
        $total_win_home = 0;
        $total_lost_home = 0;
        $total_draw_home = 0;
        $listgamedraws = Fixture::query()->where('day_timestamp', '<', $day_timestamp)
            ->where(function (Builder $builder) use ($team_id) {
                $builder->where('team_home_id', '=', $team_id)
                    ->where('team_away_winner', '=', 0)
                    ->where('team_home_winner', '=', 0);
            })->orWhere(function (Builder $builder) use ($team_id) {
                $builder->where('team_away_id', '=', $team_id)
                    ->where('team_home_winner', '=', 0)
                    ->where('team_away_winner', '=', 0);
            })->get();
      logger($listgamedraws);
       foreach ($listgamedraws as $item) {
          /*  $lastgameafter = Fixture::query()->where('team_home_id', '=', $team_id)
                ->orWhere(['team_away_id' => $team_id])->where('day_timestamp', '<', $item->day_timestamp)->limit(1);
           */ $lastgameafter = Fixture::query()->firstWhere(function (Builder $builder) use ($item, $team_id) {
                $builder->where('day_timestamp', '>', $item->day_timestamp)
                    ->where('team_home_id', '=', $team_id)
                    ->orWhere('team_away_id', '=', $team_id)->orderBy('day_timestamp', 'desc');
            });

            if ($lastgameafter instanceof Fixture) {
                logger($lastgameafter->fixture_id . ': score after draw' . $lastgameafter->score_ft_home . '-' . $lastgameafter->score_ft_away);

                if ($lastgameafter->team_home_winner == 1) {
                    $total_win_home++;
                } elseif ($lastgameafter->team_away_winner == 1) {
                    $total_lost_home++;
                } else {
                    $total_draw_home++;
                }
            }
        }
        return [
            'list_game'=>$listgamedraws,
            'win' => $total_win_home,
            'lost' => $total_lost_home,
            'draw' => $total_draw_home
        ];
    }
}
