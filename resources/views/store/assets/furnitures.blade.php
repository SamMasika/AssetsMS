@extends('layouts.back')

@section('content')
    
<div class="container py-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>furnitures
                        <div class="btn-group float-right">
                        @can('create-asset')
                        <a href="{{ url('create-asset') }}" class="btn btn-success btn-sm float-right ml-100"
                        data-bs-toggle="modal" data-bs-target="#assetModal"><i class="fa fa-plus"></i>
                        Add-Asset</a>
                        @endcan
                        <a href="#" class="btn btn-success btn-sm float-right ml-100"
                        data-bs-toggle="modal" data-bs-target="#productModal">
                        Make a Request </a>
                        </div>
                    </h5>
                </div>

                <div class="table-responsive">
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Asset Code</th>
                                    <th>Staff_Assigned</th>
                                    <th>Condition</th>
                                   <th>Request</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($furnitures as $asset)
                                    <tr>
                                        <td> {{ $asset->id }}</td>
                                        <td>{{ $asset->name }}</td>
                                        <td>{{ $asset->asset_code }}</td>
                                        @if($asset->user_id==NULL)
                                        <td> <i><b> None</b></i></td>
                                        @else
                                        <td>{{ $asset->user->name }}</td>
                                        @endif
                                        @if ($asset->status == 'broken')
                                        <td>
                                            <h6 class="text-danger">{{ $asset->status }}</h6>
                                            </td>
                                            @else
                                            <td>
                                                {{ $asset->status }}
                                            </td>
                                            @endif  
                                            <td>
                                                @if ($asset->flug=='0')
                                                <h6>Not Requested</h6>
                                                @elseif($asset->flug=='1')
                                                <h6>Pending</h6>
                                                @elseif($asset->flug=='2')
                                                <h6>Approved</h6>
                                           @elseif($asset->flug=='3')
                                           <h6>Assigned</h6>
                                           @endif
                                        </td>
                                            
                                        <td>
                                            @if ($asset->user_id !=NULL)
                                                <h6 class="text-warning">In Use</h6>
                                                @else
                                                <h6 class="text-success">In Store</h6>
                                                @endif
                                            </td>

                                        <td>

                                            
                                            @if ($asset->flug == 2)
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm dropdown-toggle btn-xs"
                                                    data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu ">
                                                    <li>
                                                        
                                                        <div class="btn-group dropdown-item p-0   "
                                                        style="align-self: center#">
                                                        
                                                        <a href="{{ url('view-asset/' . $asset->id) }}"
                                                            class="btn btn-info btn-sm"> <i
                                                            class="fa fa-eye text-light" title="View"></i></a>
                                                            
                                                            <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#ModalEdit{{ $asset->id }}"
                                                            class="btn btn-warning btn-sm"> <i
                                                            class="fa fa-pencil text-light"
                                                                    title="Edit"></i></a>
                                                            <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#ModalDelete{{ $asset->id }}"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                                            title="Delete"></i></a>
                                                            
                                                            @if ($asset->user_id == null)
                                                            <a href="{{ url('assignasset-view/' . $asset->id) }}"
                                                                class="btn btn-success btn-sm"> <i
                                                                class="fa fa-tasks" title="Assign"></i></a>
                                                                @endif
                                                                
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            @elseif($asset->flug ==3)
                                            <div class="dropdown">
                                                <button type="button"
                                                class="btn btn-primary btn-sm dropdown-toggle btn-xs"
                                                data-bs-toggle="dropdown">
                                                Actions
                                                </button>
                                                <ul class="dropdown-menu ">
                                                    <li>
                                                        
                                                        <div class="btn-group dropdown-item p-0   "
                                                        style="align-self: center#">
                                                        
                                                        <a href="{{ url('view-asset/' . $asset->id) }}"
                                                            class="btn btn-info btn-sm"> <i
                                                            class="fa fa-eye text-light" title="View"></i></a>
                                                            
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#ModalEdit{{ $asset->id }}"
                                                                class="btn btn-warning btn-sm"> <i
                                                                class="fa fa-pencil text-light"
                                                                    title="Edit"></i></a>
                                                                    <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ModalDelete{{ $asset->id }}"
                                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                                                    title="Delete"></i></a>

                                                            @if ($asset->user_id != null)
                                                                <a href="{{ url('unasi-view/' . $asset->id) }}"
                                                                    class="btn btn-danger btn-sm"> <i
                                                                        class="fa fa-tasks" title="Return"></i></a>
                                                            @endif
                                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            @elseif ($asset->flug == 1)
                                            <div class="dropdown">
                                                <button type="button"
                                                class="btn btn-primary btn-sm dropdown-toggle btn-xs"
                                                    data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu ">
                                                    <li>
                                                        
                                                        <div class="btn-group dropdown-item p-0   "
                                                        style="align-self: center#">
                                                        
                                                        <a href="{{ url('view-asset/' . $asset->id) }}"
                                                            class="btn btn-info btn-sm"> <i
                                                                    class="fa fa-eye text-light" title="View"></i></a>
                                                                    
                                                                    <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ModalEdit{{ $asset->id }}"
                                                                    class="btn btn-warning btn-sm"> <i
                                                                    class="fa fa-pencil text-light"
                                                                    title="Edit"></i></a>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#ModalDelete{{ $asset->id }}"
                                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                                                title="Delete"></i></a>
                                                                
                                                                
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            @else
                                            <div class="dropdown">
                                                <button type="button"
                                                class="btn btn-primary btn-sm dropdown-toggle btn-xs"
                                                data-bs-toggle="dropdown">
                                                Actions
                                            </button>
                                                    <ul class="dropdown-menu ">
                                                        <li>

                                                            <div class="btn-group dropdown-item p-0   "
                                                            style="align-self: center#">
                                                            
                                                            <a href="{{ url('view-asset/' . $asset->id) }}"
                                                                class="btn btn-info btn-sm"> <i
                                                                class="fa fa-eye text-light" title="View"></i></a>
                                                                    <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ModalReq{{ $asset->id }}"
                                                                    class="btn btn-secondary btn-sm"> <i
                                                                    class="fa fa-first-order text-light"
                                                                    title="Request"></i></a>                  
                                                                    <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ModalEdit{{ $asset->id }}"
                                                                    class="btn btn-warning btn-sm"> <i
                                                                    class="fa fa-pencil text-light"
                                                                    title="Edit"></i></a>
                                                                    <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#ModalDelete{{ $asset->id }}"
                                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                                                        title="Delete"></i></a>   
                                                                    </div>
                                                                </li>
                                                    </ul>
                                                </div>
                                                
                                                @include('store.orders.create')
                                                @endif
                                                @include('store.assets.delete')
                                            </td>
                                            @include('store.assets.edit')
                                        </tr>
                                        @endforeach
                                        @include('store.assets.request')
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection
    
    