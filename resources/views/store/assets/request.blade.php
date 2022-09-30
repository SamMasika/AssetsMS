<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Add Asset Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('unavailable')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="asset_name"
                        placeholder="Asset Name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                            Category</label></div>
                    <div class="col-12 col-md-9">
                        <select name="category" id="SelectLm" class="form-control">
                            <option value="">--Category--</option>
                            <option value="furniture">Furniture</option>
                            <option value="electronic">Electronic</option>
                            <option value="building">Building</option>
                            <option value="vehicles">Vehicles</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Specifications</label></div>
                    <div class="col-12 col-md-9"><textarea name="specification" id="textarea-input" rows="3" maxlength = "200" placeholder="Specifications..." class="form-control" required></textarea></div>
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