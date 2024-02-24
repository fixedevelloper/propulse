@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="card card_dark text-white mt-3">
            <div class="card-header">
              <h3>ODDS</h3>
                <div class="row">
                    <div class="col-md-3">
                        <form id="form_ontheday">
                            <input name="date" id="date_ontheday" type="date" value="{{$date}}"
                                   class="form-control m-2">
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered text-white">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Home</th>
                            <th>Away</th>
                            <th>Country</th>
                            <th>Competition</th>
                            <th>H1</th>
                            <th>H2</th>
                            <th>H3</th>
                            <th>H4</th>
                            <th>H5</th>
                            <th>H6</th>
                            <th>A1</th>
                            <th>A2</th>
                            <th>A3</th>
                            <th>A4</th>
                            <th>A5</th>
                            <th>A6</th>
                            <th>Score</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($odds as $odd)
                            @php
                            $fixture=\App\Helpers\Helpers::fixture($odd->fixture_id);
                            $team_home=App\Helpers\Helpers::getTeamByID($fixture->team_home_id);
                            $team_away=App\Helpers\Helpers::getTeamByID($fixture->team_away_id);
                            $league=App\Helpers\Helpers::getLeagueByID($fixture->league_id);
                            @endphp
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{Carbon\Carbon::createFromTimestamp($odd->day_timestamp)->format('Y-m-d')}}</td>
                                <td>{{$team_home['name']}} </td>
                                <td>{{$team_away['name']}}</td>
                                <td><img src="{{$odd->country_flag}}" width="50">{{$odd->country}}</td>
                                <td>{{$odd->league}}</td>

                                <td>{{$odd->h1}}</td>
                                <td>{{$odd->h2}}</td>
                                <td>{{$odd->h3}}</td>
                                <td>{{$odd->h4}}</td>
                                <td>{{$odd->h5}}</td>
                                <td>{{$odd->h6}}</td>
                                <td>{{$odd->a1}}</td>
                                <td>{{$odd->a2}}</td>
                                <td>{{$odd->a3}}</td>
                                <td>{{$odd->a4}}</td>
                                <td>{{$odd->a5}}</td>
                                <td>{{$odd->a6}}</td>
                                <td>{{$fixture->score_ft_home}} - {{$fixture->score_ft_away}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$odds->links()}}
                </div>

            </div>
        </div>
    </div>

@endsection
