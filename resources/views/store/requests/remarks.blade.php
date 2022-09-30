
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
  <div class="modal fade" id="ModalRemark{{$ombi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
            <b> <i> {{$ombi->remark}}</i></b>
        </div>
       
      </div>
    </div>
  </div>
  </form>