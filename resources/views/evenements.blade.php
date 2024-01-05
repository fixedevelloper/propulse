@extends('base')

@section('content')
    <!--Sub-Header Tabs Here-->
    <section class="main__tab__slide">
        <ul class="nav nav-tabs" id="myTabmain" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="main-tab8cas"
                   type="button" role="tab" aria-selected="true">
                    <span class="icons"><i class="icon-game"></i></span>
                    <span>Aprés une defaite</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="main-tab2cas"
                   type="button" role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-top"></i></span>
                    <span>Aprés une victoire</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="main-tab8cas"
                   type="button" role="tab" aria-selected="false">
                    <span class="icons"><i class="icon-slots"></i></span>
                    <span>Aprés un null</span>
                </a>
            </li>
        </ul>
    </section>
    <section class="main__body__area mt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body card_body_dark">
                        <div class="form-group mb-3">
                            <label class="text-white">Countries</label>
                            <select class="form-control" id="selectcountry">
                                <option>choose country</option>
                                @foreach($countries as $country)
                                <option value="{{$country->code}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-white">Leagues</label>
                            <select class="form-control" id="selectleaguestatistic">
                                <option>choisir un championat</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-white">Teams</label>
                            <select class="form-control" id="selectteamstatistic">
                                <option>choisir un championat</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-white">Seaisons</label>
                            <select class="form-control">
                                <option>choisir un championat</option>
                                <option>1</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-9">

            </div>
        </div>
    </section>
@endsection
@push('script')
    <script src="{{asset('js/select2.full.min.js')}}"></script>
    <script>
        $(function () {
            $(".selectpicker").select2(
            );
            $('#selectcountry').change(function () {
                $.ajax({
                    url: "{{ route('getLeague') }}",
                    type: "GET",
                    dataType: "JSON",
                    data: {
                        country: $('#selectcountry option:selected').val(),
                    },
                    success: function (data) {
                      //  alert("azerty")
                        $('#selectleaguestatistic').children('option:not(:first)').remove();
                        $.each(data, function (i, item) {
                            $('#selectleaguestatistic').append($("<option>", {
                                value: item.id,
                                text: item.name
                            }))
                        });
                    }
                });
            });
            $('#selectleaguestatistic').change(function () {
                $.ajax({
                    url: "{{ route('getTeam') }}",
                    type: "GET",
                    dataType: "JSON",
                    data: {
                        league: $('#selectleaguestatistic option:selected').val(),
                    },
                    success: function (data) {

                        $('#selectteamstatistic').children('option:not(:first)').remove();
                        $.each(data, function (i, item) {
                            $('#selectteamstatistic').append($("<option>", {
                                value: item.id,
                                text: item.name
                            }))
                        });
                    }

                });
            });
            $('#selectteamstatistic').change(function () {
                $.ajax({
                    url: "{{ route('getTeam') }}",
                    type: "GET",
                    dataType: "JSON",
                    data: {
                        league: $('#selectleaguestatistic option:selected').val(),
                    },
                    success: function (data) {

                        $('#selectteamstatistic').children('option:not(:first)').remove();
                        $.each(data, function (i, item) {
                            $('#selectteamstatistic').append($("<option>", {
                                value: item.id,
                                text: item.name
                            }))
                        });
                    }

                });
            });
        })
    </script>
@endpush
