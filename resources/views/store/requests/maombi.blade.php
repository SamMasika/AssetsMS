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
                                        <th>Name</th>
                                        <th>StaffName</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maombi as $ombi)
                                    <tr>
                                            <td> {{ $ombi->asset_name }}</td>
                                            <td>{{ $ombi->user->name }}</td>
                                            @include('store.requests.remarks')
                                            <td>
                                                @if ( $ombi->status=='2')
                                                <h6 class="text-danger">Rejected</h6> 
                                                   @elseif( $ombi->status=='1')
                                                   <h6 class="text-success">Assigned</h6>
                                                   @elseif( $ombi->status=='3')
                                                   <h6 class="text-success">Returned</h6>
                                                   @else 
                                                    <h6 class="text-warning">Pending</h6>
                                                    @endif
                                                </td>
                                                @include('store.requests.reject')
                                          <td>
                                             
                                            @if ($ombi->status=='2')

                                            <div class="dropdown">
                                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                Actions
                                              </button>
                                              <ul class="dropdown-menu ">
                                                  <li>
                                                      <div class="btn-group dropdown-item p-0   " style="align-self: center#">
                                                         
                                                          <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalRemark{{$ombi->id}}"   class="btn btn-primary btn-sm"><i class="fa fa-eye" title="Remarks"></i></a>  
                                                          <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$ombi->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                      </div>
                                                  </li>
                                              </ul>
                                            </div>
                                            @elseif ($ombi->status=='0')

                                            <div class="dropdown">
                                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                Actions
                                              </button>
                                              <ul class="dropdown-menu ">
                                                  <li>
                                                      <div class="btn-group dropdown-item p-0   " style="align-self: center#">
                                                          <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalReject{{$ombi->id}}"   class="btn btn-warning btn-sm"><i class="fa fa-close" title="Cancel"></i></a>  
                                                          <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalSpecific{{$ombi->id}}"   class="btn btn-secondary btn-sm"><i class="fa fa-eye" title="Specifications"></i></a>  
                                                          <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$ombi->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                         @can('approve')  
                                                                      <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalApprove{{$ombi->id}}"  class="btn btn-success btn-sm" > <i class="fa fa-check " title="Approve"></i></a>
                                                                      @endcan
                                                      </div>
                                                  </li>
                                              </ul>
                                            </div>
                                            @elseif ($ombi->status=='3')

                                            <div class="dropdown">
                                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-xs" data-bs-toggle="dropdown">
                                                Actions
                                              </button>
                                              <ul class="dropdown-menu ">
                                                  <li>
                                                      <div class="btn-group dropdown-item p-0   " style="align-self: center#">
                                                         
                                                          <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$ombi->id}}"   class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>  
                                                        
                                                      </div>
                                                  </li>
                                              </ul>
                                            </div>
                                                      @else
                                                     <b>----</b>
                                                        @endif
                                                        @include('store.requests.delete')
                                                    </td>
                                                    @include('store.requests.specific')
                                                </tr>
                                                @include('store.requests.approve')
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

  