@extends('layouts.back')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Welcome {{$user->name}}</h1>
            </div>
        </div>
    </div>
    {{-- <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">{{$user->name}}</li>
                </ol>
            </div>
        </div>
    </div>
</div> --}}

<div class="content mt-3">
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-info border-info"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Total No. of Assets</div>
                        <div class="stat-digit">{{$assets->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Assigned Assets </div>
                            <div class="stat-digit">{{$assetsAs->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-layout-grid2 text-dark border-dark"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text"> UnAssigned Assets</div>
                            <div class="stat-digit">{{$assetsuAs->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-layout-grid2 text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">New Assets</div>
                            <div class="stat-digit">{{$new->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-info border-info"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Used Assets</div>
                                    <div class="stat-digit">{{$usedAssets->count()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Repaired Assets</div>
                                    <div class="stat-digit">{{$repaired->count()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Broken Assets</div>
                                    <div class="stat-digit">{{$broken->count()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                     <div class="card-body">
                         <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Staffs Assigned</div>
                            <div class="stat-digit">{{$staffAssigned->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Number of Staff</div>
                            <div class="stat-digit">{{$staff->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Users</div>
                            <div class="stat-digit">{{$user->count()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        

        
        
        {{-- <div class="col-xl-3 col-lg-6">
            <section class="card">
                <div class="twt-feed blue-bg">
                    <div class="corner-ribon black-ribon">
                    </div>
                    <div class="fa fa-twitter wtt-mark"></div>
        
                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;"
                                alt="" src="{{ asset('back/images/sam.jpg') }}">
                        </a>
                        <div class="media-body">
                            <h2 class="text-white display-6">{{$users->name}}</h2>
                            <p class="text-light">Project Manager</p>
                        </div>
                    </div>
                </div>
            </section>
        </div> --}}
    </div> <!-- .content -->
@endsection
