@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="card card_dark mt-3 text-white">
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <label class="form-label">Operation</label>
                            <select name="position" class="form-select">
                                <option value="ratio_for">Ratio for</option>
                                <option value="ratio_against">Ratio Against</option>
                                <option value="ratio_a_b_for">Ratio A-B For</option>
                                <option value="ratio_a_b_against">Ratio A-B Against</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <label class="form-label">Value start</label>
                            <input type="text"  value="" class="form-control" name="value_start">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary mt-4" type="submit">Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
       <div class="card card_dark mt-3 text-white mt-3">
        <div class="card-body">
            <table class="table table-bordered text-white">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Operation</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                <tr>
                    <td>{{$setting->id}}</td>
                    <td>{{$setting->title}}</td>
                    <td>{{$setting->position}}</td>
                    <td>{{$setting->start_value}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
           <div class="card-footer">
               {!! $settings->links() !!}
           </div>
    </div>
    </div>
@endsection
