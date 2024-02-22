@extends('base')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="card card_dark mt-3 text-white">
            <div class="card-header">
                <h3>{{$team_home->name}} - {{$home_lastgame}}</h3>
            </div>
            <div class="card-body">
                <h4>Nombre victoires: {{$home['win']}}</h4>
                <h4>Nombre defaites: {{$home['lost']}}</h4>
                <h4>Nombre Null: {{$home['draw']}}</h4>
                <table class="table table-bordered text-white">
                    <tbody>
                    @foreach($home['list_game'] as $game)
                        <tr>
                            <td>{{\App\Helpers\Helpers::getTeamByID($game->team_home_id)['name']}}</td>
                            <td>{{$game->score_ft_home}}</td>
                            <td>-</td>
                            <td>{{$game->score_ft_away}}</td>
                            <td>{{\App\Helpers\Helpers::getTeamByID($game->team_away_id)['name']}}</td>

                        </tr>

                    @endforeach
                    </tbody>

                </table>

            </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="card card_dark mt-3 text-white">
            <div class="card-header">
                <h3>{{$team_away->name}} - {{$away_lastgame}}</h3>
            </div>
            <div class="card-body">
                <h4>Nombre victoires: {{$away['win']}}</h4>
                <h4>Nombre defaites: {{$away['lost']}}</h4>
                <h4>Nombre Null: {{$away['draw']}}</h4>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
