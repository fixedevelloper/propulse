@extends('base')

@section('content')

    <div class="col-md-6">
        <div class="card card_dark mt-3 text-white">
            <div class="card-header">
                <h3>{{$team_home->name}}</h3>
            </div>
            <div class="card-body">
                <h4>Nombre victoires: {{$home['win']}}</h4>
                <h4>Nombre defaites: {{$home['lost']}}</h4>
                <h4>Nombre Null: {{$home['draw']}}</h4>
            </div>
        </div>
    </div>

@endsection
