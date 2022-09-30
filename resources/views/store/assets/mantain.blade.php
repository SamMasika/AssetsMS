@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Assets to Be Repaired
                            <a href="{{url('repaired')}}" class="btn btn-success btn-sm float-right">
                                <i class="fa fa-arrow-right"></i>
                            Repairement History</a>
                        </h4>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Asset Name</th>
                                        <th>Condition</th>
                                        <th>Brought_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maintains as $info)
                                    <tr>
                                        <td>{{$info->asset->name}}</td>
                                        <td>{{$info->condtn}}</td>
                                          <td>{{$info->created_at}}</td>
                                       <td>
                                            <div>
                                              <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalRepair{{$info->id}}"  class="btn btn-success btn-sm" >Repair</i></a>
                                          </div>
                                       </td>
                                       @include('store.assets.repair')
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