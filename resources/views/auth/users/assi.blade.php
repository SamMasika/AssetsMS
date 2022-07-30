<div class="modal fade" id="ModalAss{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Assign Role</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('userrole/'.$user->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="mt-2">
                <input type="text" class="form-control" name="name" value={{$user->name}} readonly>
                   </div>
                   <div class="mt-5">
                    @foreach($roles as $value)
                    <label>{{ Form::checkbox('role[]', $value->id, in_array($value->id, $userRole) ? true : false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                    <br/>
                    @endforeach
                   </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary btn-sm float-right">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
            </form>
        </div>
    </div>
  </div>
