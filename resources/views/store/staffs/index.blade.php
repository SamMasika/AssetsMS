@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        @can('create staff')  
                        <h3>Staff-List
                         
                            <a href="#" class="btn btn-success btn-sm float-right mt-auto" data-bs-toggle="modal"
                                data-bs-target="#staffModal">
                                <i class="fa fa-plus">Add-Staff</i></a>
                        </h3>
                        @endcan
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FullName</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($staffs as $staff)
                                        <tr>
                                            <td>{{ $staff->id }}</td>
                                            <td>{{ $staff->name }}</td>
                                            <td>{{ $staff->email }}</td>
                                            <td>{{ $staff->department->name }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                      Actions
                                                    </button>
                                                    <ul class="dropdown-menu ">
                                                        <li>
                                                            <div class="btn-group dropdown-item p-0   " style="align-self: center">
                                                                <a href="{{url('view-staff/'.$staff->id)}}"  class="btn btn-info btn-sm"> <i class="fa fa-eye text-light" title="View"></i></a>
                                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$staff->id}}"  class="btn btn-warning btn-sm" > <i class="fa fa-pencil text-light" title="Edit"></i></a>
                                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$staff->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                            </div>
                                                        </li>
                                                    </ul>
                                                  </div> 
                                                    </td>
                                                    @include('store.staffs.delete')
                                                    @include('store.staffs.edit')
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

    <div class="modal fade" id="staffAsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Staff Assigned Assets</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                                <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>AssetName</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stafAs as $staf)
                                            <tr>
                                                <td>{{ $staf->staff->fname }}</td>
                                                <td>{{ $staf->staff->lname }}</td>
                                                   <td>{{$staf->asset->name}}</td>    
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                         </div>
                </div>
        </div>
 </div>
   
    <div class="modal fade" id="staffModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('store-staff') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                    placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="email" id="text-input" name="email"
                                    placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone"
                                    placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                Department</label></div>
                            <div class="col-12 col-md-9">
                                <select name="depart_id" id="SelectLm" class="form-control">
                                    <option value="0">--Department--</option>
                                    @foreach ($departments as $item)  
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="status" 
                                            value="option1" class="form-check-input">Status
                                        </label>
                                    </div>
                                </div>
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
