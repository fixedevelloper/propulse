@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @if(sizeof($leagues)>0)
                <div>
                    @if($country_by)
                        <div class="text-white mt-2 mb-2 m-2">
                            <img src="{{$country_by->flag}}" height="20">
                            <span class="h6 mx-2">{{$country_by->name}}</span>
                        </div>
                    @endif
                </div>
                <div class="sidebar mb-3">
                    @foreach($leagues as $league_)
                        <a class="block-item"
                           href="{{route('standings',['country'=>$country_code,'league'=>$league_->league_id])}}"><img
                                alt="" src="{{$league_->logo}}" height="20"> {{$league_->name}}</a>

                    @endforeach
                </div>
            @endif
            <div class="text-white m-2">
                <h5>Countries</h5>
            </div>
            <div class="sidebar pt-3">
                @foreach($countries as $country)
                    <a class="block-item" href="{{route('standings',['country'=>$country->code])}}"><img
                            src="{{$country->flag}}" height="20" alt=""> <span class="m-2">{{$country->name}}</span></a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9 mt-5">
            <div class="row">
                <div class="card card_dark">
                    <div class="card-body">
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
                                <div class="col-md-8">
                                    <img src="{{$league->logo}}" height="80">
                                    <span class="h3 mx-2 text-white">{{$league->name}}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group">
                            <a class="btn btn-warning">Fixtures</a>
                            <a class="btn btn-danger">Standing</a>
                            <a class="btn btn-warning">Results</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="card card_dark">
                    <div class="card-body">
                        <div class="mb-3 mt-2">
                            <a class="btn btn-success">Standings</a>
                            <a class="btn btn-success">HT/FT</a>
                        </div>
                        <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link active"
                                    id="ex3-tab-1"
                                    data-bs-toggle="tab"
                                    href="#ex3-tabs-1"
                                    role="tab"
                                    aria-controls="ex3-tabs-1"
                                    aria-selected="true"
                                >Overlay</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link"
                                    id="ex3-tab-2"
                                    data-bs-toggle="tab"
                                    href="#ex3-tabs-2"
                                    role="tab"
                                    aria-controls="ex3-tabs-2"
                                    aria-selected="false"
                                >Home</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link"
                                    id="ex3-tab-3"
                                    data-bs-toggle="tab"
                                    href="#ex3-tabs-3"
                                    role="tab"
                                    aria-controls="ex3-tabs-3"
                                    aria-selected="false"
                                >Away</a
                                >
                            </li>
                        </ul>

                        <div class="tab-content" id="ex2-content">
                            <div
                                class="tab-pane fade show active"
                                id="ex3-tabs-1"
                                role="tabpanel"
                                aria-labelledby="ex3-tab-1"
                            >
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
                                            <td>@if($staging->team)
                                                <img src="{{$staging->team->logo}}" height="20" alt="">
                                                @endif
                                            </td>
                                            <td>{{$staging->team->name}}</td>
                                            <td>{{$staging->home_played + $staging->away_played}}</td>
                                            <td>{{$staging->home_win + $staging->away_win}}</td>
                                            <td>{{$staging->home_lost + $staging->away_lost}}</td>
                                            <td>{{$staging->home_draw + $staging->away_draw}}</td>
                                            <td>{{$staging->home_goal_for + $staging->away_goal_for}}
                                                : {{$staging->home_goal_against + $staging->away_goal_against}}</td>
                                            <td>{{$staging->goal_diff}}</td>
                                            <td>{{$staging->points}}</td>
                                            <td>
                                                @for($i=0;$i<strlen($staging->form);$i++)

                                                    <span @if(str_split($staging->form)[$i]=='W')
                                                          class="btn btn-sm btn-success"
                                                          @elseif(str_split($staging->form)[$i]=='L')  class="btn btn-sm btn-danger"
                                                          @else
                                                          class="btn btn-sm btn-warning"  @endif>{{str_split($staging->form)[$i]}}</span>
                                                @endfor

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">

                            </div>
                            <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
