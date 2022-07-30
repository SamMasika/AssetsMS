<div class="modal fade" id="ModalEdit{{$department->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <form action="{{url('update-department/'.$department->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                        placeholder="Name" class="form-control" value="{{$department->name}}">
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
