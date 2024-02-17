@extends('base')
@section('title') Last results @endsection
@section('content')
    <!--Sub-Header Tabs Here-->
    <section class="main__tab__slide">
        <ul class="nav nav-tabs" id="myTabmain" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="{{route('home')}}" class="nav-link active" id="main-tab" type="button">
                    <span class="icons"><i class="icon-home"></i></span>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{route('home',['act'=>'live'])}}" class="nav-link" id="main-tab2" type="button" role="tab"
                   aria-selected="false">
                    <span class="icons"><i class="icon-live"></i></span>
                    <span>Live</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{route('home',['date'=>date('Y-m-d')])}}" class="nav-link" id="main-tab3" type="button"
                   role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-calender"></i></span>
                    <span>Today</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{route('home',['game'=>'football'])}}" class="nav-link" id="main-tab4" type="button"
                   role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-football"></i></span>
                    <span>Football</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{route('home',['game'=>'tenis'])}}" class="nav-link" type="button" role="tab"
                   aria-selected="false">
                    <span class="icons"><i class="icon-tennis"></i></span>
                    <span>Tennis</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab6" data-bs-toggle="tab" data-bs-target="#mainTab6" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-basketball"></i></span>
                    <span>Basketball</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab7" data-bs-toggle="tab" data-bs-target="#mainTab7" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-icehockey"></i></span>
                    <span>
                        Ice Hockey
                    </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab8" data-bs-toggle="tab" data-bs-target="#mainTab8" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-handball"></i></span>
                    <span>Handball</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab9" data-bs-toggle="tab" data-bs-target="#mainTab9" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-afootball"></i></span>
                    <span>
                    American Football
                </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab10" data-bs-toggle="tab" data-bs-target="#mainTab10" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-baseball"></i></span>
                    <span>
                        Baseball
                    </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab11" data-bs-toggle="tab" data-bs-target="#mainTab11" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-horse"></i></span>
                    <span>Horse Racing</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab12" data-bs-toggle="tab" data-bs-target="#mainTab12" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-v"></i></span>
                    <span>Virtuals</span>
                </button>
            </li>
            <li class="nav-item">
                <div class="search-button">
                    <button class="nav-link" id="search">
                        <span class="icons"><i class="icon-search"></i></span>
                        <span>Search</span>
                    </button>
                    <div class="search-popup">
                        <div class="search-bg"></div>
                        <div class="search-form">
                            <form action="#">
                                <div class="form">
                                    <input type="text" id="searchs" placeholder="Search Your Fovatires Game">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab14" data-bs-toggle="tab" data-bs-target="#mainTab14" type="button"
                        role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-star"></i></span>
                    <span>Favourites</span>
                </button>
            </li>
        </ul>
    </section>
    <!--Sub-Header Tabs Here-->
    <div class="row">
        <x-sider-bar/>
        <div class="col-md-9 mt-5">
            <div class="row container-fluid">
                <div class="col-md-6">
                    {!! $leagues->links() !!}
                </div>
                <div class="col-md-6">
                    <div class="col-md-6" style="float: right">
                        <form id="form_rang">
                            <input name="rang" id="rang_home" type="text" value="{{$rang}}" class="form-control m-2">
                        </form>
                    </div>
                    <div class="col-md-6" style="float: right">
                        <form id="form_date">
                            <input name="date" id="date_home" type="date" value="{{$date}}" class="form-control m-2">
                        </form>
                    </div>
                </div>


            </div>
            <div class="card card_dark">

                <div class="row">
                    <!-- Accordion Example -->

                    <div class="accordion" id="accordionExample">
                        @foreach($leagues as $league)
                            <div class="accordion-item card_dark">
                                <h2 class="accordion-header" id="headingOne{{$league->id}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne{{$league->id}}" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <img src="{{$league->logo}}" height="20"> <span
                                            class="m-x-2">{{$league->name}}</span>
                                        <span class="mx-2">{{$league->league_round}}</span> - <span
                                            class="mx-2">{{$league->league_season}}</span>
                                    </button>
                                </h2>
                                <div id="collapseOne{{$league->id}}" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="live__heightlight mb__30">
                                            <div class="height__table">
                                                <div class="main__table">
                                                    <div class="table__wrap">
                                                        @foreach(\App\Helpers\Helpers::fixtureOfDayByLeague($league->league_id,$league->timestamp,$rang) as $fixture)
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
                                                            <div class="table__items b__bottom">
                                                                <div class="t__items">
                                                                    <div class="t__items__left">
                                                                        <h6>
                                                                            <img height="20"
                                                                                 src=" {{$team_home['logo']}}"> {{$team_home['name']}}
                                                                            @if($standing_home)
                                                                                ({{$standing_home->rank}} - <span @if($standing_home->goal_diff<0) class="text-danger"@endif>({{ $standing_home->goal_diff}}))</span> {{$last_home_}}@endif
                                                                        </h6>
                                                                        <span class="text">
                                              <img height="20"  src=" {{$team_away['logo']}}" alt="">   {{$team_away['name']}}
                                                                            @if($standing_away)
                                                                                ({{$standing_away->rank}} - <span @if($standing_away->goal_diff<0) class="text-danger"@endif>({{$standing_away->goal_diff }}))</span> {{$last_away_}}@endif
                                                                        </span>
                                                                        <p>
                                                                            <a href="#0">
                                                                              <!--  Live -->
                                                                            </a>
                                                                            <span>
                                                    {{\App\Helpers\Helpers::makeTime($fixture)}}
                                                </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="cart__point">
                                                                    <span> {{$fixture->goal_home}}</span> -
                                                                    <span>{{$fixture->goal_away}}</span>
                                                                </div>
                                                                <div class="mart__point__items">
                                                                    <a href="#0"
                                                                       class="twing twing__right">
                                                                        <i class="icon-twer"></i>
                                                                    </a>
                                                                    <a href="#0" class="mart">
                                                                        <i class="icon-pmart"></i>
                                                                    </a>
                                                                    <a href="#0box" class="point__box">
                                                                        @if($fixture->odd)
                                                                       {{$fixture->odd->mt_win_home}}
                                                                        @endif
                                                                    </a>
                                                                    <a href="#0box" class="point__box">
                                                                        @if($fixture->odd)
                                                                            {{$fixture->odd->mt_draw}}
                                                                        @endif
                                                                    </a>
                                                                    <a href="#0box" class="point__box">
                                                                        @if($fixture->odd)
                                                                        {{\App\Helpers\Helpers::odd($fixture->id)->mt_win_away}}
                                                                        @endif
                                                                    </a>
                                                                </div>
                                                                <div   class="cart__point cart__point__two">
                                                                    2,6
                                                                </div>
                                                                <div class="mart__point__two">
                                                                    <div class="mart__point__left">
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            @if($fixture->odd)
                                                                                {{$fixture->odd->both_score_yes}}
                                                                            @endif
                                                                        </a>
                                                                        <a href="#box"
                                                                           class="point__box">
                                                                            @if($fixture->odd)
                                                                                {{$fixture->odd->both_score_no}}
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <div class="mart__point__right">
                                                                        <a href="#0"
                                                                           class="point__box bg__none">
                                                                            <i class="icon-lock"></i>
                                                                        </a>
                                                                        <a href="#0"
                                                                           class="point__box bg__none">
                                                                            <i class="icon-star star"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
