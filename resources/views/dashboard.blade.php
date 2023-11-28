
@extends('base')

@section('content')

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                 <div class="col-md-4 mb-3">
                                        <img class="wd-100 ht-100 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h1 class="tx-16 fw-bolder">ID</h1>
                                        <h3 class="tx-12 text-muted">Invited by</h3>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin">
                    <div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Personal link</h6>
                                </div>
                                <div class="">
                                    <span>xxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Image</h6>
                                </div>
                                <div class="">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
<div class="row  flex-grow-1">
    <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="text-flickr">Patners</h3>
            <h3 class="number_dashbord mt-1 fw-bolder">6985741</h3>
            <span class="block"><span class="mdi mdi-arrow-top-right"></span>235</span>
        </div>
    </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3>Teams</h3>
                <h3 class="number_dashbord mt-1 fw-bolder">25897</h3>
                <span class="block"><span class="mdi mdi-arrow-top-right"></span>46</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3>Profits</h3>
                <h3 class="tx-16 fw-bolder">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h3>
                <h3 class="tx-16 fw-bolder">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h3>
            </div>
        </div>
    </div>

</div>

@endsection
