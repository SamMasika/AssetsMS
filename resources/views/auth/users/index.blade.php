@extends('layouts.back')

@section('content')
    <div class="container py-5" id="panel">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Users-List
                            <a href="#" class="btn btn-success float-right" data-bs-toggle="modal"
                                data-bs-target="#userModal">
                                <i class="fa fa-plus">Add-User</i></a>
                        </h3>
                    </div>
                        <div class="table-responsive">
                            <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->lname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalView{{$user->id}}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{url('assign-view/'.$user->id)}}" class="btn btn-success btn-sm" >Role</a>
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$user->id}}" class="btn btn-danger btn-sm">Delete</a>
                                            @include('auth.users.vie')
                                        </td>
                                        {{-- @include('auth.users.assi') --}}
                                    </tr>
                                    @include('auth.users.delete')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('store-user') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">FirstName</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="name"
                                    placeholder="FirstName" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">LastName</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="lname"
                                    placeholder="LastName" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="email"  name="email"
                                    placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="password"  name="password"
                                    placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="number" class=" form-control-label">Phone</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="text"  name="phone"
                                    placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                Role</label></div>
                            <div class="col-12 col-md-9">
                                <select name="role_id" id="SelectLm" class="form-control">
                                    <option value="0">--Role--</option>
                                    @foreach ($roles as $item)  
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
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
@endsection