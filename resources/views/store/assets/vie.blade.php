<div class="modal fade" id="ModalView{{ $asset->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$asset->name}}"></div>
                         </div>
    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Category</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$asset->category->name}}"></div>
                    </div>
    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Received By</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$asset->user->name}}"></div>
                    </div>

                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Vendor</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name=""readonly class="form-control" value="{{$asset->vendor->name}}"></div>
                        </div>
    
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Brand</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$asset->brand->name}}"></div>
                        </div>
                        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$asset->status}}"></div>
                        </div>
    
                        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Flug</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$asset->flug==1?'Active':'Inactive'}}"></div>
                        </div>
                        
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Assigned To</label></div>
                            @foreach ($lastassigned as $last)
                            <div class="col-12 col-md-9">
                                <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$last->fname}}"></div>
                             </div>
                             @endforeach --}}
                             
                             {{-- <div class="row form-group">
                                 <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Currently AssignedTo</label></div>
                                 @foreach ($staffs as $staff)
                                 <div class="col-12 col-md-9">
                                     <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$staff->fname}}"></div>
                                 </div>
                                 @endforeach --}}
                             <div class="row form-group">
                                 <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Image</label></div>
                                 <div class="col-12 col-md-9">
                                @if ($asset->image)
                                <img src=" {{asset('back/assets/images/'.$asset->image)}}" aria-readonly="" alt="Product-Image" class="asset-image"> 
                                @endif
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Barcode</label></div>
                                <div class="col-12 col-md-9">
                                    {!!$asset->barcodes!!}    
                                    Asset Code:{{$asset->asset_code}}
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
