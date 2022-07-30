
  @extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Role-List
                            <a href="{{url('create-role')}}" class="btn btn-success float-right"  data-bs-toggle="modal" data-bs-target="#roleModal">
                                <i class="fa fa-plus">Add-Role</i></a>
                        </h3>
                    </div>
                        <div class="table-responsive">
                            <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="70%">Name </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($roles as $role)
                                    @foreach (\Spatie\Permission\Models\Role::where('name', $role['name'])->get() as $rol)
                                    <tr>
                                        <td>{{$rol->id}}</td>
                                        <td>{{$rol->name}}</td>
                                        <td>
                                          <a href="{{url('role-permissions/'.$rol->id)}}" class="btn btn-info btn-sm">View</i></a>
                                          <a href="{{url('edit-role/'.$rol->id)}}"  class="btn btn-warning btn-sm" >Edit</i></a>
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$rol->id}}"  class="btn btn-danger btn-sm">Delete</a>
                                          {{-- <a href="{{url('createassign/'.$rol->id)}}" > <i class="fa fa-tasks" title="Assign Permissions"></i></a> --}}
                                        </td>
                                        @include('auth.roles.delete')
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-role')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder="Name" class="form-control" required>
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
@endsection


