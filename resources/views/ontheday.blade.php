@extends('base')

@section('content')
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
        <th></th>
        <th>TeamB</th>
        <th>MP</th>
        <th>B</th>
        <th>Ratio For</th>
        <th>Ratio Against</th>
    </tr>
    </thead>
    <tbody>
    @foreach($fixtures as $fixture)

        @php
            $standing_home=\App\Helpers\Helpers::rankTeam($fixture);
             $standing_away=\App\Helpers\Helpers::rankTeamAway($fixture);
             $team_home=\App\Helpers\Helpers::getTeamByID($fixture->team_home_id);
             $team_away=\App\Helpers\Helpers::getTeamByID($fixture->team_away_id);
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
             }

        @endphp
        <tr>
            <td>  <img height="20" src=" {{$team_home['logo']}}"><span>{{$team_home['name']}}</span></td>
            <td>{{$standing_home['home_played'] + $standing_home['away_played']}}</td>
            <td>{{$standing_home['goal_home_for'] + $standing_home['goal_away_for']}}:{{$standing_home['goal_home_against'] + $standing_home['goal_away_against']}}</td>
            <td>{{round(($standing_home['goal_home_for'] + $standing_home['goal_away_for']) / ($standing_home['home_played'] + $standing_home['away_played']),2)}}</td>
            <td>{{round(($standing_home['goal_home_against'] + $standing_home['goal_away_against']) / ($standing_home['home_played'] + $standing_home['away_played']),2)}}</td>
            <td>-</td>
            <td>
                <img height="20" src=" {{$team_away['logo']}}" alt=""><span> {{$team_away['name']}}
                    </span>
            </td>
            <td>{{$standing_away['home_played'] + $standing_away['away_played']}}</td>
            <td>{{$standing_away['goal_home_for'] + $standing_away['goal_away_for']}}:{{$standing_away['goal_home_against'] + $standing_away['goal_away_against']}}</td>
            <td>{{round(($standing_away['goal_home_for'] + $standing_away['goal_away_for']) / ($standing_away['home_played'] + $standing_home['away_played']),2)}}</td>
            <td>{{round(($standing_away['goal_home_against'] + $standing_away['goal_away_against']) / ($standing_away['home_played'] + $standing_home['away_played']),2)}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


        </div>
    </div>
@endsection
