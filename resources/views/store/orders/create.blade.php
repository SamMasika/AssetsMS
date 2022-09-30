 <form action="{{route('placeorder',$asset->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
      <div class="modal fade" id="ModalReq{{$asset->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Make Request</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to make <b>{{$asset->name}}</b> request?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Request</button>
            </div>
          </div>
        </div>
      </div>
      </form>

