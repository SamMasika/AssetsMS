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
                    <div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm"
                                 class=" form-control-label">
                                    ReceivedBy
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="user_id" id="SelectLm" class="form-control">
                                    <option value="">{{$asset->user->name}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                    Vendor
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="vendor_id" id="SelectLm" class="form-control">
                                    <option value="{{ $asset->vendor->id }}">{{ $asset->vendor->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                    Category
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="cate_id" id="SelectLm" class="form-control">
                                    <option value="">{{ $asset->category->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                    Brand
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="brand_id" id="SelectLm" class="form-control">
                                    <option value="">{{ $asset->brand->name }}</option>
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

                            <div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input"
                                            class=" form-control-label">Status</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="status"
                                            placeholder="Name" class="form-control" value="{{ $asset->status }}">
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Flug</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    @if ($asset->flug == 1)
                                                        <input type="checkbox" id="checkbox1" name="flug"
                                                            value="option1" class="form-check-input" checked>Flug
                                                    @else
                                                        <input type="checkbox" id="checkbox1" name="flug"
                                                            value="option1" class="form-check-input">Flug
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="disabled-input"
                                                class=" form-control-label">Image</label></div>
                                        <div class="col-12 col-md-9">
                                            @if ($asset->image)
                                                <img src=" {{ asset('back/assets/images/' . $asset->image) }}"
                                                    aria-readonly="" alt="Product-Image" class="asset-image">
                                            @endif
                                            <div class="col-12 col-md-9"><input type="file" id="file-input"
                                                    name="image" class="form-control"></div>
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
