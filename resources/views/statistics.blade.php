@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="card card_dark mt-3">
            <div class="card-header">

                    <form id="form_position">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Start date</label>
                                <input name="start_date"  type="date" class="form-control m-2">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">End date</label>
                                <input name="end_date" type="date" class="form-control m-2">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Operation</label>
                                <select name="position" id="position" class="form-select">
                                    <option value="ratio_for">Ratio for</option>
                                    <option value="ratio_against">Ratio Against</option>
                                    <option value="ratio_a_b_for">Ratio A-B For</option>
                                    <option value="ratio_a_b_against">Ratio A-B Against</option>
                                </select>
                            </div>

                        </div>
                    </form>

            </div>
            <div class="card-body">
                <table class="table table-bordered text-white">
                    <thead>
                    <tr>
                        <th>Score</th>
                        <th>Occurence</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fixtures as $fixture)
                        <tr>
                            <td>{{$fixture->goal_home}} - {{$fixture->goal_away}}</td>
                            <td>{{$fixture->num}}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
