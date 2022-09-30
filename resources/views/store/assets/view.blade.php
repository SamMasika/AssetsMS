@extends('layouts.back')

@section('content')
    <div class="container py-5">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Asset Details</strong>
                <a href="{{url('assets-list')}}" class="btn btn-success float-right"><i class="fa fa-angle-left"></i> Back</a>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->name}}"></div>
                         </div>
    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Category</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->category}}"></div>
                    </div>


                    
                    {{-- <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Vendor</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name=""readonly class="form-control" value="{{$assets->vendor->name}}"></div>
                        </div>
     --}}
                        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->status}}"></div>
                        </div>
                        @if ($assets->category=='vehicles')
                            
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Purchased With Status</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->plate_no}}"></div>
                            </div>
                            @else
                            
                        @endif
                        
                                 
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Serial Code</label></div>
                          
                            @if($assets->serial_code==NULL)
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="None"></div>
                            </div> 
                            @else
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->serial_code}}"></div>
                            </div> 
                            @endif
                
                                
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">CurrentlyAssignedTo</label></div>
                      
                        @if($assets->user_id==NULL)
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="None"></div>
                        </div> 
                        @else
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->user->name}}"></div>
                        </div> 
                        @endif
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">QRCode</label></div>
                                <div class="col-12 col-md-9">
                                    {!!$assets->barcodes!!}    
                                    {{-- Asset Code:{{$assets->asset_code}} --}}
                          </div>
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
                    <h5>{{$assets->name}}  Assignment History
                       
                    </h5>
                </div>
                <div class="table-responsive">

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Assign.No</th>
                                    <th>FullName</th>
                                    <th>Ass.Condition</th>
                                    <th>Return Cond.</th>
                                    <th>Assigned Date</th>
                                    <th>Return Date</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lasts as $last)
                                <tr>
                                   
                                        @if ($last==NULL)
                                        <td></td>
                                        @else
                                        <td > {{$last->id}}</td>
                                        @endif
    
                                        @if ($last==NULL)
                                        <td ></td>
                                        @else
                                        <td > {{$last->user->name}}</td>
                                        @endif
                                        @if ($last==NULL)
                                        <td ></td>
                                        @else
                                        <td > {{$last->condtn_i}}</td>
                                        @endif
                                        @if ($last==NULL)
                                        <td ></td>
                                        @else
                                        <td > {{$last->condtn}}</td>
                                        @endif
                                        @if ($last==NULL)
                                        <td ></td>
                                        @else
                                        <td >{{$last->assigned}}</td>
                                        @endif
    
                                        @if ($last==NULL)
                                        <td ></td>
                                        @else
                                        <td > {{$last->created_at}} </td>
                                        @endif
    
                                      
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