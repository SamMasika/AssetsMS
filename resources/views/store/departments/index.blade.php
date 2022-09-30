@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Departments-List
                            <a href="{{url('create-department')}}" class="btn btn-success btn-sm float-right"  data-bs-toggle="modal" data-bs-target="#departmentModal">
                                <i class="fa fa-plus">Add-Department</i></a>
                        </h3>
                    </div>
                        <div class="table-responsive">
                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th >Name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($departments as $department)  
                                        <tr>
                                            <td>{{$department->id}}</td>
                                            <td>{{$department->name}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                      Actions
                                                    </button>
                                                    <ul class="dropdown-menu ">
                                                        <li>
                                                            <div class="btn-group dropdown-item p-0   " style="align-self: center#">
                                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$department->id}}"  class="btn btn-warning btn-sm" > <i class="fa fa-pencil text-light" title="Edit"></i></a>
                                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$department->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                                <a href="{{url('view-department/'.$department->id)}}"    class="btn btn-info btn-sm"><i class="fa fa-eye" title="View"></i></a>  
                                                            </div>
                                                        </li>
                                                    </ul>
                                                  </div>
                                                
                                                
                                                @include('store.departments.delete')
                                                @include('store.departments.edit')
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
    </div>

    <div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-department')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
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