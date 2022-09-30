@extends('layouts.back')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>
                    <a href="{{'dashboard'}}" class="text-primary">Dashboard</a>|
                    {{$roles->name}}</h1>
            </div>
        </div>
    </div>
    {{-- <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active ">{{$roles->name}}</li>
                </ol>
            </div>
        </div>
    </div> --}}
</div>

<div class="content mt-3">
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text"><a href="{{url('assets-list')}}">Total Assets</a></div>
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
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-info border-info"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text"><a href="{{url('assets-list')}}">AssignedAssets</a></div>
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
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text"> <a href="{{url('assets-list')}}">AssetsUnassigned</a></div>
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
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="{{url('assets-list')}}">RepairedAssets</a></div>
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
                                <div class="stat-text"><a href="{{url('workshop')}}">Broken Assets</a></div>
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
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-dark border-dark"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="{{url('disposal')}}">Disposed Assets</a></div>
                                <div class="stat-digit">{{$disposed->count()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            {{-- <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-dark border-dark"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="{{url('#')}}">Pending Requests</a></div>
                                <div class="stat-digit">{{$sum}}</div>
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
                                <div class="stat-text"><a href="{{url('#')}}">ApprovRequests</a></div>
                                <div class="stat-digit">{{$jumla}}</div>
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
                                <div class="stat-text"><a href="{{url('#')}}">RejectedRequests</a></div>
                                <div class="stat-digit">{{$total}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --}}
         </div> 

         
@endsection
