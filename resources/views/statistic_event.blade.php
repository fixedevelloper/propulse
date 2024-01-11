@extends('base')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <form id="form_stat">
                    <div class="col-md-3">
                        <div class="">
                            <label class="form-label"></label>
                            <select name="filter" class="form-select" id="stat_filter">
                                <option>Choose params</option>
                                @foreach($selects as $select)
                                <option value="{{$select->percent}}">{{$select->percent}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>{{$total}}
            </div>
            <div class="card-body card_body_dark">
                <table class="table table-bordered text-white">
                    <tbody>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Pourcentage</th>
                    </tr>
                    <tr>
                        <th>0.5 But</th>
                        <th>{{$s_05}}</th>
                        <th>{{round($s_05/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>1.5 Buts</th>
                        <th>{{$s_15}}</th>
                        <th>{{round($s_15/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>2.5 Buts</th>
                        <th>{{$s_25}}</th>
                        <th>{{round($s_25/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>3.5 Buts</th>
                        <th>{{$s_35}}</th>
                        <th>{{round($s_35/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>4.5 Buts</th>
                        <th>{{$s_45}}</th>
                        <th>{{round($s_45/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>Win Home</th>
                        <th>{{$win_home}}</th>
                        <th>{{round($win_home/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>Win Away</th>
                        <th>{{$win_away}}</th>
                        <th>{{round($win_away/$total,2)}}</th>
                    </tr>
                    <tr>
                        <th>Draw</th>
                        <th>{{$draw}}</th>
                        <th>{{round($draw/$total,2)}}</th>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
