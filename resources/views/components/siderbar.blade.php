<div class="col-md-2 d-none d-md-block">
    @if(sizeof($leagues)>0)
        @yield('league_siderbar')
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
                   href="{{route('home',['country'=>$league_->country_code,'league'=>$league_->league_id])}}"><img
                        alt="" src="{{$league_->logo}}" height="20"> {{$league_->name}}</a>
                {{--<a class="block-item"
                   href="{{route('standings',['country'=>$country_code,'league'=>$league_->league_id])}}"><img
                        alt="" src="{{$league_->logo}}" height="20"> {{$league_->name}}</a>--}}

            @endforeach
        </div>
    @endif
    <div class="text-white m-2">
        <h5>Countries</h5>
    </div>
    <div class="sidebar pt-3">
        @foreach($countries as $country)
            <a class="block-item" href="{{route('home',['country'=>$country->code])}}"><img
                    src="{{$country->flag}}" height="20" alt=""> <span class="m-2">{{$country->name}}</span></a>
        @endforeach
    </div>
</div>
