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
                    @endif
                    </tbody>

                </table>
                <table class="table table-bordered text-white">
                        <thead>
                        <tr>
                            <th colspan="1"></th>
                            <th colspan="7" class="text-center text-uppercase fw-bold">Équipe a L'exterieur</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th rowspan="8" class="text-rotation text-center text-uppercase fw-bold"><span>Équipe a Domicile</span></th>
                        </tr>
                        <tr>
                            <td class="text-uppercase fw-bold">Goals</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                        @if($total>0)
                        <tr>
                            <td>0</td>
                            <td>(0-0) {{round(($score_0_0/$total)*100,2)}} %</td>
                            <td>(0-1) {{round(($score_0_1/$total)*100,2)}} %</td>
                            <td>(0-2) {{round(($score_0_2/$total)*100,2)}} %</td>
                            <td>(0-3) {{round(($score_0_3/$total)*100,2)}} %</td>
                            <td>(0-4) {{round(($score_0_4/$total)*100,2)}} %</td>
                            <td>(0-5) -</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>(1-0) {{round(($score_1_0/$total)*100,2)}} %</td>
                            <td>(1-1){{round(($score_1_1/$total)*100,2)}} %</td>
                            <td>(1-2 ){{round(($score_1_2/$total)*100,2)}} %</td>
                            <td>(1-3) {{round(($score_1_3/$total)*100,2)}} %</td>
                            <td>(1-4) {{round(($score_1_4/$total)*100,2)}} %</td>
                            <td>(1-5) {{round(($score_1_5/$total)*100,2)}} %</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>(2-0) {{round(($score_2_0/$total)*100,2)}} %</td>
                            <td>(2-1) {{round(($score_2_1/$total)*100,2)}} %</td>
                            <td>(2-2) {{round(($score_2_2/$total)*100,2)}} %</td>
                            <td>(2-3) {{round(($score_2_3/$total)*100,2)}} %</td>
                            <td>(2-4) {{round(($score_2_4/$total)*100,2)}} %</td>
                            <td>(2-5) {{round(($score_2_5/$total)*100,2)}} %</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>(3-0) {{round(($score_3_0/$total)*100,2)}} %</td>
                            <td>(3-1) {{round(($score_3_1/$total)*100,2)}} %</td>
                            <td>(3-2) {{round(($score_3_2/$total)*100,2)}} %</td>
                            <td>(3-3) {{round(($score_3_3/$total)*100,2)}} %</td>
                            <td>(3-4) {{round(($score_3_4/$total)*100,2)}} %</td>
                            <td>(3-5) {{round(($score_3_5/$total)*100,2)}} %</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>(4-0) {{round(($score_4_0/$total)*100,2)}}</td>
                            <td>(4-1) {{round(($score_4_1/$total)*100,2)}}</td>
                            <td>(4-2){{round(($score_4_2/$total)*100,2)}}</td>
                            <td>(4-3) {{round(($score_4_3/$total)*100,2)}}</td>
                            <td>(4-4) {{round(($score_4_4/$total)*100,2)}}</td>
                            <td>(4-5) {{round(($score_4_5/$total)*100,2)}}</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>(5-0) {{round(($score_5_0/$total)*100,2)}} %</td>
                            <td>(5-1) {{round(($score_5_1/$total)*100,2)}} %</td>
                            <td>(5-2) {{round(($score_5_2/$total)*100,2)}} %</td>
                            <td>(5-3) {{round(($score_5_3/$total)*100,2)}} %</td>
                            <td>(5-4) {{round(($score_5_4/$total)*100,2)}} %</td>
                            <td>(5-5) {{round(($score_5_5/$total)*100,2)}} %</td>
                        </tr>
                            @endif
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
