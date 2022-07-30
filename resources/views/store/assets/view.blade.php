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
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->category->name}}"></div>
                    </div>
    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Received By</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->user->name}}"></div>
                    </div>

                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Vendor</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name=""readonly class="form-control" value="{{$assets->vendor->name}}"></div>
                        </div>
    
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Brand</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->brand->name}}"></div>
                        </div>
                        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->status}}"></div>
                        </div>
    
                        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Flug</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$assets->flug==1?'Active':'Inactive'}}"></div>
                        </div>
                        
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Assigned To</label></div>
                            @foreach ($lastassigned as $last)
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$last->fname}}"></div>
                             </div>
                             @endforeach --}}
                             
                             <div class="row form-group">
                                 <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Currently AssignedTo</label></div>
                                 @foreach ($staffs as $staff)
                                 <div class="col-12 col-md-9">
                                     <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$staff->fname}}"></div>
                                 </div>
                                 @endforeach
                             {{-- <div class="row form-group">
                                 <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Image</label></div>
                                 <div class="col-12 col-md-9">
                                @if ($assets->image)
                                <img src=" {{asset('back/assets/images/'.$assets->image)}}" aria-readonly="" alt="Product-Image" class="asset-image"> 
                                @endif
                            </div> --}}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Barcode</label></div>
                                <div class="col-12 col-md-9">
                                    {!!$assets->barcodes!!}    
                                    Asset Code:{{$assets->asset_code}}
                    </div>

                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lastly AssignedTo</label></div>
                            @foreach ($lastassigned as $last)
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$last->fname}}"></div>
                            </div>
                            @endforeach --}}
    
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
                    <h5>{{$assets->name}}  Assignment Details
                       
                    </h5>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Assign.No</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Assign.Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lastassigned as $last)
                            <tr>
                                <td width="10%"> {{$last->id}}</td>
                                <td>{{$last->fname}}</td>
                                <td>{{$last->lname}}</td>
                                <td width="20%">{{date('d/m/Y', strtotime($last->created_at))}}</td>
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