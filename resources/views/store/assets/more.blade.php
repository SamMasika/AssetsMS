@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Assets-List
                            <a href="{{url('create-asset')}}" class="btn btn-success float-right"  
                            data-bs-toggle="modal" data-bs-target="#assetModal">
                            <i class="fa fa-plus">Add-Asset</i></a>
                        </h3>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Initial Condition</th>
                                        <th>Final Condition</th>
                                        <th>Assigned_at</th>
                                        <th>Unassigned_at</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infos as $info)
                                    <tr>
                                        <td>{{$info->condtn_i}}</td>
                                        <td>{{$info->condtn}}</td>
                                          <td>{{$info->assigned}}</td>
                                          <td>{{$info->created_at}}</td>
                                     
                                    </tr> 
                                    @endforeach  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection