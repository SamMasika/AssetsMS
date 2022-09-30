@extends('layouts.back')

@section('content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5>Assets
                <div class="btn-group float-right">

                    @can('create-asset')
                    <a href="{{ url('create-asset') }}" class="btn btn-success btn-sm float-right ml-100"
                    data-bs-toggle="modal" data-bs-target="#assetModal"><i class="fa fa-plus"></i>
                    Add-Asset</a>
                    @endcan
                    <a href="#" class="btn btn-success btn-sm float-right ml-100"
                    data-bs-toggle="modal" data-bs-target="#productModal">
                    Make a Request </a>
                    <a href="{{ URL::to('/assets/pdf') }}" class="btn btn-success btn-sm float-right ml-100">
                    PDF </a>
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
                                @foreach ($assets as $asset)
                                {{-- @if($currentTime->diffInMonths($asset->created_at) < 3) --}}

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
                                        {{-- @endif --}}
                                        @endforeach
                                        @include('store.assets.request')
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
       
        </div>

        <div class="modal fade" id="assetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Asset</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('store-asset') }}" method="post" enctype="multipart/form-data"
                            class="form-horizontal">
                            @csrf
                           
                            {{-- <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                        Vendor</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="vendor_id" id="SelectLm" class="form-control">
                                        <option value="0">--Vendor--</option>
                                        @foreach ($vendors as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                         
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                        Status</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="SelectLm" class="form-control">
                                        <option value="">--Status--</option>
                                        <option value="new">New</option>
                                        <option value="used">Used</option>
                                        <option value="broken">Broken</option>
                                        <option value="repaired">Repaired</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                        Category</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="category" id="SelectLm" class="form-control">
                                        <option value="">--Category--</option>
                                        <option value="furniture">Furniture</option>
                                        <option value="electronic">Electronic</option>
                                        <option value="building">Building</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" placeholder="Name"
                                        class="form-control" >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="p_price" placeholder="Price"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">UTA</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="uta" placeholder="UTA"
                                        class="form-control" required>
                                </div>
                            </div>
                            {{-- <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Purchase Date</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="datetime-local" id="text-input" name="purchace_date" placeholder="UTA"
                                        class="form-control" required>
                                </div>
                            </div> --}}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Serial
                                        Code</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="serial_code" placeholder="Serial Code"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Plate
                                        Number</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="plate_no" placeholder="Plate_No"
                                        class="form-control">
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

         
            

            <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" >
                      <h5 class="modal-title" id="exampleModalLabel">Add Asset Request</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('unavailable')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="asset_name"
                                    placeholder="Asset Name" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                        Category</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="SelectLm" class="form-control">
                                        {{-- <option value="{{$asset->category}}">{{$asset->category}}</option> --}}
                                        <option value="furniture">Furniture</option>
                                        <option value="electronic">Electronic</option>
                                        <option value="building">Building</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="others">Others</option>
                                    </select>
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

  