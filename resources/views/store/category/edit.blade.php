<div class="modal fade" id="ModalEdit{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <form action="{{url('update-category/'.$category->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                        placeholder="Name" class="form-control" value="{{$category->name}}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"></label>Description</div>
                    <div class="col-12 col-md-9"><textarea name="desc" id="textarea-input" rows="3" 
                        placeholder="Description" class="form-control">{{$category->desc}}</textarea></div>
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
