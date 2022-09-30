@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Requests-List
                         
                        </h3>
                    </div>

                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>StaffName</th>
                                        <th>Asset Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requ as $item)
                                    <tr>
                                        <td> {{ $item->id }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->asset->name }}</td>
                                        <td>{{ $item->department->name }}</td>
                                        <td>
                                            @if ( $item->status=='2')
                                            <h6 class="text-danger">Rejected</h6> 
                                            @elseif( $item->status=='1')
                                            <h6 class="text-success">Approved</h6>
                                            @elseif( $item->status=='3')
                                            <h6 class="text-success">Assigned</h6>
                                            @elseif( $item->status=='4')
                                            <h6 class="text-success">Returned</h6>
                                            @else 
                                            <h6 class="text-warning">Pending</h6>
                                            @endif
                                        </td>
                                        @include('store.orders.view')
                                        <td>
                                            
                                            
                                            @if ($item->status=='2')

                                                      <div class="dropdown">
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                          Actions
                                                        </button>
                                                        <ul class="dropdown-menu ">
                                                            <li>
                                                                <div class="btn-group dropdown-item p-0   " style="align-self: center#">  
                                                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalRemark{{$item->id}}"   class="btn btn-info btn-sm"><i class="fa fa-eye" title="View Remarks"></i></a>  
                                                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$item->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                                </div>
                                                            </li>
                                                        </ul>
                                                      </div>
                                                      @elseif ($item->status=='1')

                                                   <b>----</b>
                                                      @elseif ($item->status=='3')

                                                   <b>----</b>
                                                      @elseif ($item->status=='0')
                                                      <div class="dropdown">
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                          Actions
                                                        </button>
                                                        <ul class="dropdown-menu ">
                                                            <li>
                                                                <div class="btn-group dropdown-item p-0   " style="align-self: center#">   
                                                                    @can('approve')  
                                                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalApprove{{$item->id}}"  class="btn btn-success btn-sm" > <i class="fa fa-check " title="Approve"></i></a>
                                                                    @endcan
                                                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalReject{{$item->id}}"   class="btn btn-warning btn-sm"><i class="fa fa-close" title="Cancel"></i></a>  
                                                                    
                                                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$item->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                                </div>
                                                            </li>
                                                        </ul>
                                                      </div>
                                                                @else
                                                                <div class="dropdown">
                                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                                      Actions
                                                                    </button>
                                                                    <ul class="dropdown-menu ">
                                                                        <li>
                                                                            <div class="btn-group dropdown-item p-0   " style="align-self: center#">
                                                                                
                                                                                
                                                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$item->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>  
                                                                @endif
                                                                
                                                                @include('store.orders.delete')
                                                            </td>
                                                            @include('store.orders.remark')
                                                        </tr>
                                                        @include('store.orders.reject')
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
            </div>
        </div>
    </div>
    @endsection
    
    