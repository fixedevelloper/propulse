@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="card card_dark mt-3 text-white">
            <div class="card-body">
                <form id="form_ontheday">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Debut</label>
                            <input name="date" id="date_debut" type="date" value="{{$date}}"
                                   class="form-control m-2">
                        </div>
                        <div class="col-md-3">
                            <label>Fin</label>
                            <input name="date_end" id="date_fin" type="date" value="{{$date_fin}}"
                                   class="form-control m-2">
                        </div>
                        <div class="col-md-4">
                            <div class="input-group mt-4">
                                <input value="{{$search}}" name="percent" class="form-control" id="percent" placeholder="0.2">
                                <button type="submit" class="input-group-text bg-gradient">Search</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="input-group-text bg-gradient mt-4">Save</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
        <div class="card card_dark mt-3 text-white">
            <div class="card-body">
                <table class="table table-bordered text-white">
                    <thead>
                    <tr>
                        <th>TeamA</th>
                        <th>MP</th>
                        <th>B</th>
                        <th>Ratio For</th>
                        <th>Ratio Against</th>
                        <th>Score Fixture</th>
                        <th>TeamB</th>
                        <th>MP</th>
                        <th>B</th>
                        <th>Ratio For</th>
                        <th>Ratio Against</th>
                        <th>A-B (Ratio For)</th>
                        <th>A-B (Ratio Against)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fixtures as $fixture)

                        @php
                            $standing_home=\App\Helpers\Helpers::rankTeam($fixture);
                            $standing_away=\App\Helpers\Helpers::rankTeamAway($fixture);
                            $team_home=\App\Helpers\Helpers::getTeamByID($fixture->team_home_id);
                            $team_away=\App\Helpers\Helpers::getTeamByID($fixture->team_away_id);
                            $ratio=App\Helpers\Helpers::calculRatio($fixture);
                            if ($standing_home){
                                $last_home_="";
                            if (strlen($standing_home->form)>0){
                                $last_home=str_split($standing_home->form);
                                $last_home_=$last_home[0];
                            }
                            }

                            if ($standing_away){
                                $last_away_="";
                                if (strlen($standing_away->form)>0){
                                $last_away=str_split($standing_away->form);
                                $last_away_=$last_away[0];
                            }
                                 $mp_b=$standing_away['home_played'] + $standing_away['away_played'];
                                 $ratio_f_b=round(($standing_away['goal_home_for'] + $standing_away['goal_away_for']) / ($mp_b),2);
                                 $ratio_ag_b=round(($standing_away['goal_home_against'] + $standing_away['goal_away_against']) / ($mp_b),2);

                            }
                        @endphp
                        @if(($ratio['ratio_a_b_for']>0 && $ratio['ratio_a_b_against']<0) || ($ratio['ratio_a_b_for']<0 && $ratio['ratio_a_b_against']>0))
                            <tr>
                                <td><img height="20" src=" {{$team_home['logo']}}"><span>{{$team_home['name']}}</span>
                                </td>
                                <td>{{ is_null($standing_home)?'-':($standing_home['home_played'] + $standing_home['away_played'])}}</td>
                                <td>{{is_null($standing_home)?'-':($standing_home['goal_home_for'] + $standing_home['goal_away_for'])}}
                                    :{{is_null($standing_home)?'-':($standing_home['goal_home_against'] + $standing_home['goal_away_against'])}}</td>
                                <td>{{$ratio['ratio_a_for']}}</td>
                                <td>{{$ratio['ratio_a_against']}}</td>
                                <td class="text-center">{{$fixture->goal_home}}- {{$fixture->goal_away}}
                                    <p>{{$fixture->st_short}}</p></td>
                                <td>
                                    <img height="20" src=" {{$team_away['logo']}}" alt=""><span> {{$team_away['name']}}
                    </span>
                                </td>
                                <td>{{is_null($standing_away)?'-':($standing_away['home_played'] + $standing_away['away_played'])}}</td>
                                <td>{{is_null($standing_away)?'-':($standing_away['goal_home_for'] + $standing_away['goal_away_for'])}}
                                    :{{is_null($standing_away)?'-':($standing_away['goal_home_against'] + $standing_away['goal_away_against'])}}</td>
                                <td>{{$ratio['ratio_b_for']}}</td>
                                <td>{{$ratio['ratio_b_against']}}</td>
                                <td class="@if($ratio['ratio_a_b_for']>0) bg-success @else bg-danger @endif">
                                    <span>{{$ratio['ratio_a_b_for']}}</span></td>
                                <td class="@if($ratio['ratio_a_b_against']>0) bg-success @else bg-danger @endif">
                                    <span>{{$ratio['ratio_a_b_against']}}</span></td>
                                {{--   <td>{{$fixture->league_id}}</td>--}}
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                {!! $fixtures->links() !!}
            </div>
        </div>
    </div>

@endsection
