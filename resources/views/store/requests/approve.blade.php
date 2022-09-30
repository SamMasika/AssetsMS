

<div class="modal fade" id="ModalApprove{{$ombi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Approve Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('maombi-process/'.$ombi->id) }}" method="post" enctype="multipart/form-data"
                class="form-horizontal">
                @csrf
                <div class="row form-group ">
                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                        Status</label></div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="SelectLm" class="form-control" aria-readonly="true">
                            <option value="1">Approved</option>  
                          
                         </div> 
                        </select>
                    </div>
                </div>   
            
                <div>
                    <button type="submit" class="btn btn-primary btn-sm float-right">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
  </div>
