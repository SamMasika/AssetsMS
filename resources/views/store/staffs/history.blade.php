@extends('layouts.back')

@section('content')
    <div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5> Assets Assigned History
     <a href="{{url('staff-list')}}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>       
                    </h5>
                </div>
                <div class="table-responsive">

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Asset Name</th>
                                    <th>Assigned Condition</th>
                                    <th>Returned Condition</th>
                                    <th>Assigned Date</th>
                                    <th>Returning Date</th>
                                    <th>Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($history as $item)   
                              <tr>
                                  <td>{{$item->asset->name}}</td>
                                  <td>{{$item->condtn_i}}</td>
                                  <td>{{$item->condtn}}</td>
                                  <td>{{$item->assigned}}</td>
                                  <td>{{$item->created_at}}</td>
                                  <td>{{$item->reason}}</td>
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