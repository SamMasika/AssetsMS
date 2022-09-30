@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            {{$depart->name}}_Department Assets
                        </h5>
                    </div>
                        <div class="table-responsive">
                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Staff_Name</th>
                                            <th >Asset_Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($issued as $issue)  
                                        <tr>
                                            <td>{{$issue->user->name}}</td>
                                            <td>{{$issue->asset['name']}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                            </div>
                        </div>
                </div>
                <div class="card-footer float-right">
                  Total Number of Assets Assigned is: <h6 class="text-success"><b>{{$issued->count()}} Asset(s)</b></h6>  
                </div>
            </div>
        </div>
    </div>
@endsection