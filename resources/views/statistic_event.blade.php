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
                                @foreach($selects as $select)
                                <option value="{{$select->percent}}">{{$select->percent}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-body card_body_dark">
                <table class="table table-bordered text-white">
                    <tbody>
                    <tr>
                        <th>0.5 But</th>
                        <th>-</th>
                    </tr>
                    <tr>
                        <th>1.5 Buts</th>
                        <th>-</th>
                    </tr>
                    <tr>
                        <th>2.5 Buts</th>
                        <th>-</th>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
