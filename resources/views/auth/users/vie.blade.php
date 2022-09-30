<div class="modal fade" id="ModalView{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Role</label></div>
                    @foreach ($roles as $role)
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$role->name}}"></div>
                     </div>
                    @endforeach
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">FirsName</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$user->name}}"></div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$user->email}}"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Phone</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$user->phone}}"></div>
                    </div>
            </form>
        </div>
    </div>
  </div>
