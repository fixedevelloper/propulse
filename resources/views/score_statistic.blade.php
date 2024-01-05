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
                                <option value="ratio_for">Ratio for</option>
                                <option value="ratio_against">Ratio Against</option>
                                <option value="ratio_a_b_for">Ratio A-B For</option>
                                <option value="ratio_a_b_against">Ratio A-B Against</option>
                            </select>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-body card_body_dark">
                <table class="table table-bordered text-white">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Score</th>
                        <th>Occurrence</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($scores as $k => $v)
                        <tr>
                            <td></td>
                            <td>{{ $k }}</td>
                            <td>{{ $v }}</td>
                        </tr>
{{--                        <div>{{ $k }} ({{ $v->count() }})</div>--}}
                    @endforeach
                  {{--  @foreach($scores as $score)
                        <tr>
                            <td>{{$score->goal_home}} - {{$score->goal_away}}</td>
                        </tr>
                    @endforeach--}}

                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection

