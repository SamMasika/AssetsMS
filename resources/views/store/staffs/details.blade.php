@extends('layouts.back')

@section('content')
    <div class="container py-5">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Staff Details</strong>
                <a href="{{url('staff-list')}}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">FullName</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$staffs->name}}"></div>
                         </div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$staffs->email}}"></div>
                             </div>
                             <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Phone</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$staffs->phone}}"></div>
                                 </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">department</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$staffs->department->name}}"></div>
                                     </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NOA</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$stafAs->count()}}"></div>
                                         </div>

                            
                         </form>
            
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5> Currently Assigned Assets
                        <a href="{{url('history/'.$staffs->id)}}" class="btn btn-success btn-sm float-right ml-auto" >
                            History</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Asset Name</th>
                                <th>Assigned Date</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($stafAs as $item)
                              
                          <tr>
                            @if ($stafAs->staff_id=NULL)
                            <td></td>
                            @else
                              <td>{{$item->asset->name}}</td>
                              @endif
                              
                              <td>{{$item->created_at}}</td>
                          </tr> 
                          @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection