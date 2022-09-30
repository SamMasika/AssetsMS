<div class="modal fade" id="ModalRepair{{ $info->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('repair-asset/' . $info->id) }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                   

                     
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                    Asset
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="assets_id" id="SelectLm" class="form-control" readonly>
                                    <option value="">{{ $info->asset->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                            Condition
                                        </label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="condtn" id="SelectLm" class="form-control">
                                            <option value="{{ $info->status }}">{{ $info->status }}</option>
                                            <option value="repaired">Repaired</option>
                                            <option value="disposed">Disposed</option>
                                        </select>
                                    </div>
                                 </div>                   
                                <div>
                             <button type="submit" class="btn btn-primary btn-sm float-right">
                             <i class="fa fa-dot-circle-o"></i> Submit
                             </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
