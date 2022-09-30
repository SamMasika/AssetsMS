<div class="modal fade" id="ModalEdit{{ $staff->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-staff/' . $staff->id) }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Firstname</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="fname"
                             class="form-control" value="{{ $staff->name }}">
                        </div>
                    </div>
                     
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class=" form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email" name="email"
                                placeholder="Email" class="form-control" value="{{ $staff->email }}" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Phone</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone"
                                placeholder="Phone" class="form-control" value="{{ $staff->phone }}" required>
                        </div>
                    </div>
                    <div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm"
                                 class=" form-control-label">
                                    Department
                                </label></div>
                            <div class="col-12 col-md-9">
                                <select name="user_id" id="SelectLm" class="form-control">
                                    <option value="">{{$staff->department->name}}</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            @if ($staff->status == 1)
                                                <input type="checkbox" id="checkbox1" name="status"
                                                    value="option1" class="form-check-input" checked>Status
                                            @else
                                                <input type="checkbox" id="checkbox1" name="status"
                                                    value="option1" class="form-check-input">Status
                                            @endif
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm float-right">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
