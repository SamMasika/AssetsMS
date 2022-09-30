@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Vendors-List
                            <a href="#" class="btn btn-success btn-sm float-right"  data-bs-toggle="modal" data-bs-target="#brandModal">
                                <i class="fa fa-plus">Add-Vendor</i></a>
                        </h3>
                    </div>
                        <div class="table-responsive">
                            <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendors as $vendor)
                                    
                                    <tr>
                                        <td>{{$vendor->id}}</td>
                                        <td width="70%">{{$vendor->name}}</td>
                                        <td>         
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                                                  Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                 <li> <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$vendor->id}}" class="badge badge-pill badge-warning">Edit</i></a></li>
                                                 <li>  <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$vendor->id}}"  class="badge badge-pill badge-danger">Delete</i></a></li>
                                                </ul>
                                              </div>   
                                            @include('store.vendors.delete')
                                            @include('store.vendors.edit')
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
              <h5 class="modal-title" id="exampleModalLabel">Add Vendor</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-vendor')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder="Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="text-input" name="email"
                            placeholder="Email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="phone"
                            placeholder="Phone" class="form-control" required>
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