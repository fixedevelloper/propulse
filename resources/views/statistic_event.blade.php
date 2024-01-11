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
                    @if($total>0)
                    <tr>
                        <th>0.5 But</th>
                        <th>{{$s_05}}</th>
                        <th>{{round(($s_05/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>1.5 Buts</th>
                        <th>{{$s_15}}</th>
                        <th>{{round(($s_15/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>2.5 Buts</th>
                        <th>{{$s_25}}</th>
                        <th>{{round(($s_25/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>3.5 Buts</th>
                        <th>{{$s_35}}</th>
                        <th>{{round(($s_35/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>4.5 Buts</th>
                        <th>{{$s_45}}</th>
                        <th>{{round(($s_45/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Win Home</th>
                        <th>{{$win_home}}</th>
                        <th>{{round(($win_home/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Win Away</th>
                        <th>{{$win_away}}</th>
                        <th>{{round(($win_away/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Draw</th>
                        <th>{{$draw}}</th>
                        <th>{{round(($draw/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <td colspan="3"><h2 class="text-center text-uppercase">Scores exactes</h2></td>
                    </tr>
                    <tr>
                        <th>Score 1-0</th>
                        <th>{{$score_1_0}}</th>
                        <th>{{round(($score_1_0/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 2-0</th>
                        <th>{{$score_2_0}}</th>
                        <th>{{round(($score_2_0/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 3-0</th>
                        <th>{{$score_3_0}}</th>
                        <th>{{round(($score_3_0/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 4-0</th>
                        <th>{{$score_4_0}}</th>
                        <th>{{round(($score_4_0/$total)*100,2)}}</th>
                    </tr>

                    <tr>
                        <th>Score 0-0</th>
                        <th>{{$score_0_0}}</th>
                        <th>{{round(($score_0_0/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 1-1</th>
                        <th>{{$score_1_1}}</th>
                        <th>{{round(($score_1_1/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 2-2</th>
                        <th>{{$score_2_2}}</th>
                        <th>{{round(($score_2_2/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 3-3</th>
                        <th>{{$score_3_3}}</th>
                        <th>{{round(($score_3_3/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 4-4</th>
                        <th>{{$score_4_4}}</th>
                        <th>{{round(($score_4_4/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 0-1</th>
                        <th>{{$score_0_1}}</th>
                        <th>{{round(($score_0_1/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 0-2</th>
                        <th>{{$score_0_2}}</th>
                        <th>{{round(($score_0_2/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 0-3</th>
                        <th>{{$score_0_3}}</th>
                        <th>{{round(($score_0_3/$total)*100,2)}}</th>
                    </tr>
                    <tr>
                        <th>Score 0-4</th>
                        <th>{{$score_0_4}}</th>
                        <th>{{round(($score_0_4/$total)*100,2)}}</th>
                    </tr>
                    @endif
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
