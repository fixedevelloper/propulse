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
                            <input type="text" class="form-control" value="{{$setting->title}}" name="title">
                        </div>
                    </div>
                   {{-- <div class="col-md-3">
                        <div class="">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>--}}
                    <div class="col-md-3">
                        <div class="">
                            <label class="form-label">Value start</label>
                            <input type="text"  value="{{$setting->start_value}}" class="form-control" name="value_start">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary mt-4" type="submit">Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
     {{--   <div class="card card_dark mt-3 text-white mt-3">
        <div class="card-body">
            <table class="table table-bordered text-white">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Value Start</th>
                    <th>Value End</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                </tr>
                </tbody>
            </table>
        </div>
    </div>--}}
    </div>
@endsection
