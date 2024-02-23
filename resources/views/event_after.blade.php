@extends('base')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="card card_dark mt-3 text-white">
            <div class="card-header">
                <h3>{{$team_home->name}} After winner</h3>
            </div>
            <div class="card-body">
                <h4>Nombre victoires: {{$home['win']['win']}}</h4>
                <h4>Nombre defaites: {{$home['win']['lost']}}</h4>
                <h4>Nombre Null: {{$home['win']['draw']}}</h4>
               {{-- <table class="table table-bordered text-white">
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

                </table>--}}

            </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="card card_dark mt-3 text-white">
            <div class="card-header">
                <h3>{{$team_away->name}} After Winner</h3>
            </div>
            <div class="card-body">
                <h4>Nombre victoires: {{$away['win']['win']}}</h4>
                <h4>Nombre defaites: {{$away['win']['lost']}}</h4>
                <h4>Nombre Null: {{$away['win']['draw']}}</h4>
              {{--  <table class="table table-bordered text-white">
                    <tbody>
                    @foreach($away['list_game'] as $game)
                        <tr>
                            <td>{{\App\Helpers\Helpers::getTeamByID($game->team_home_id)['name']}}</td>
                            <td>{{$game->score_ft_home}}</td>
                            <td>-</td>
                            <td>{{$game->score_ft_away}}</td>
                            <td>{{\App\Helpers\Helpers::getTeamByID($game->team_away_id)['name']}}</td>

                        </tr>

                    @endforeach
                    </tbody>

                </table>--}}
            </div>
        </div>
    </div>
</div>
</div>
    <!--- after lost-->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card_dark mt-3 text-white">
                <div class="card-header">
                    <h3>{{$team_home->name}} After Lost</h3>
                </div>
                <div class="card-body">
                    <h4>Nombre victoires: {{$home['lost']['win']}}</h4>
                    <h4>Nombre defaites: {{$home['lost']['lost']}}</h4>
                    <h4>Nombre Null: {{$home['lost']['draw']}}</h4>


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card_dark mt-3 text-white">
                <div class="card-header">
                    <h3>{{$team_away->name}} After Lost</h3>
                </div>
                <div class="card-body">
                    <h4>Nombre victoires: {{$away['lost']['win']}}</h4>
                    <h4>Nombre defaites: {{$away['lost']['lost']}}</h4>
                    <h4>Nombre Null: {{$away['lost']['draw']}}</h4>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card_dark mt-3 text-white">
                <div class="card-header">
                    <h3>{{$team_home->name}} After Draw</h3>
                </div>
                <div class="card-body">
                    <h4>Nombre victoires: {{$home['draw']['win']}}</h4>
                    <h4>Nombre defaites: {{$home['draw']['lost']}}</h4>
                    <h4>Nombre Null: {{$home['draw']['draw']}}</h4>


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card_dark mt-3 text-white">
                <div class="card-header">
                    <h3>{{$team_away->name}} After Draw</h3>
                </div>
                <div class="card-body">
                    <h4>Nombre victoires: {{$away['draw']['win']}}</h4>
                    <h4>Nombre defaites: {{$away['draw']['lost']}}</h4>
                    <h4>Nombre Null: {{$away['draw']['draw']}}</h4>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
