<div class="modal fade" id="ModalEdit{{ $asset->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-asset/' . $asset->id) }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                

                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                    Vendor
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="vendor_id" id="SelectLm" class="form-control">
                                    <option value="{{ $asset->vendor->id }}">{{ $asset->vendor->name }}</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                    Category</label></div>
                            <div class="col-12 col-md-9">
                                <select name="category" id="SelectLm" class="form-control">
                                    <option value="{{$asset->category}}">{{$asset->category}}</option>
                                    <option value="furniture">Furniture</option>
                                    <option value="electronic">Electronic</option>
                                    <option value="building">Building</option>
                                    <option value="vehicles">Vehicles</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                      
                        <div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                        placeholder="Name" class="form-control" value="{{ $asset->name }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Serial Code</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="serial_code"
                                        placeholder="Serial Code" class="form-control" value="{{ $asset->serial_code }}">
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                        Condition
                                    </label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="SelectLm" class="form-control">
                                        <option value="{{$asset->status}}">{{$asset->status}}</option>
                                        <option value="new">New</option>
                                        <option value="used">Used</option>
                                        <option value="broken">Broken</option>
                                        <option value="repaired">Repaired</option>
                                    </select>
                                </div>
                            </div>
                          <div>
                             <div>
                               <button type="submit" class="btn btn-primary btn-sm float-right">
                                 <i class="fa fa-dot-circle-o"></i> Submit
                                 </button>
                             </div>
                </form>
            </div>
        </div>
    </div>
