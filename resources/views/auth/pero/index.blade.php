@extends('layouts.back')

@section('content')
<div class="card">

    <div class="card-header">
      <h4> Assign Permissions
          <a href="{{url('create-permission')}}" class="btn btn-primary float-right " data-bs-toggle="modal" data-bs-target="#roleModal">Create Permission</a>  
        
      </h4>
    </div>
</div>
<div class="card">
  
  <div class="card-body">
      {{-- <h3>{{ Str::camel($permission['name']) }}</h3> --}}
      <table class="table table-striped table-hover w-auto">
          <thead>
              <tr>

                  <th width="5%"></th>
                  <th width="35%">Role</th>
                  <th width="50%">Description</th>
                  <th>Action</th>
                  
                </tr>
            </thead>
            @foreach($roles as $role)

     <tbody>
        @foreach (\Spatie\Permission\Models\Role::where('name', $role['name'])->get() as $rol)
        <tr>
            <td> </td>
            <td>{{ $rol->name }}</td>
            <td></td>
            <td>
                <div class=" btn-group ">
                <a href="" class="btn btn-info btn-sm ">View</a>
                <a href="{{url('edit-permission/'.$rol->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{url('delete-permission/'.$rol->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </div>
            
            </td>

        </tr>
    @endforeach
      
</tbody>
@endforeach
   </table>
  </div>
</div>   


<!-- Modal -->
<div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Permission</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{url('store-permission')}}" method="post">
            @csrf
            <div>
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
        </div>
        <div>
        <label for="">Description</label>
        <input type="text" class="form-control" name="description">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
       </div>
    </form>
      </div>
    </div>
  </div>
  


  @extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Category-List
                            <a href="{{url('create-brand')}}" class="btn btn-success float-right"  data-bs-toggle="modal" data-bs-target="#brandModal">
                                <i class="fa fa-plus">Add-Brand</i></a>
                        </h3>
                    </div>
                        <div class="table-responsive">
                            <table id="category" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                    
                                    <tr>
                                        <td>{{$brand->id}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$brand->id}}"><i class="fa fa-pencil" title="Edit"></i></a>
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$brand->id}}"><i class="fa fa-trash" title="Delete"></i></a>
                                            @include('store.brand.delete')
                                            @include('store.brand.edit')
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="brandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-brand')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder="Name" class="form-control">
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