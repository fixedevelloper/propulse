@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="left_country">
            <div class="block_league pt-3">
                <h4 class="text-white mb-2">Leagues</h4>
                @foreach($leagues as $league_)

                        <a class="block-item" href="{{route('standings',['country'=>$country_code,'league'=>$league_->league_id])}}"><img src="{{$league_->logo}}" height="20"> {{$league_->name}}</a>

                @endforeach

            </div>
            </div>
            <div class="left_country">
            <div class="block_country">
                <h4 class="text-white mb-2">Countries</h4>
                    @foreach($countries as $country)
                 <a class="block-item"  href="{{route('standings',['country'=>$country->code])}}"><img src="{{$country->flag}}" height="20" alt="">{{$country->name}}</a>
                    @endforeach


            </div>
            </div>
        </div>
        <div class="col-md-9 mt-5">
            <div class="row">
                @if($country_by)
                <div class="col-md-6 text-success">
                    <img src="{{$country_by->flag}}" height="20">
                    <span class="h6 mx-2">{{$country_by->name}}</span>
                </div>
                    @endif
            </div>
            <div class="row mt-3">
                @if($league)
               <div class="col-md-6">
                   <img src="{{$league->logo}}" height="80">
                   <span class="h3">{{$league->name}}</span>
               </div>
                @endif
            </div>
            <div class="row">
                <table class="table table-ranking">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th></th>
                        <th width="40%">Team</th>
                        <th>MP</th>
                        <th>W</th>
                        <th>L</th>
                        <th>D</th>
                        <th>G</th>
                        <th>GD</th>
                        <th>PTS</th>
                        <th width="20%">FORM</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stadings as $staging)
                        <tr>
                            <td>{{$staging->rank}}</td>
                            <td><img src="{{$staging->team->logo}}" height="20" alt=""></td>
                            <td>{{$staging->team->name}}</td>
                            <td>{{$staging->home_played + $staging->away_played}}</td>
                            <td>{{$staging->home_win + $staging->away_win}}</td>
                            <td>{{$staging->home_lost + $staging->away_lost}}</td>
                            <td>{{$staging->home_draw + $staging->away_draw}}</td>
                            <td>{{$staging->home_goal_for + $staging->away_goal_for}} : {{$staging->home_goal_against + $staging->away_goal_against}}</td>
                            <td>{{$staging->goal_diff}}</td>
                            <td>{{$staging->points}}</td>
                            <td>{{$staging->form}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
@endsection
