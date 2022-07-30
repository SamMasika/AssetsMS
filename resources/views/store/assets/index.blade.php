@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Assets-List
                            <a href="{{url('create-asset')}}" class="btn btn-success float-right"  
                            data-bs-toggle="modal" data-bs-target="#assetModal">
                            <i class="fa fa-plus">Add-Asset</i></a>
                        </h3>
                    </div>
                    <div class="table-responsive">

                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        {{-- <th>Image</th> --}}
                                        <th>Status</th>
                                        <th>Delivery Date</th>
                                        <th>Assignment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assets as $asset)
                                    <tr>
                                        <td> {{$asset->id}}</td>
                                        <td>{{$asset->name}}</td>
                                        {{-- <td>
                                            <img src="{{asset('back/assets/images/'.$asset->image)}}" class="asset-image" alt="Image here">
                                          </td> --}}
                                          <td>{{$asset->status}}</td>
                                          <td>{{date('d-m-Y', strtotime($asset->created_at))}}</td>
                                          <td>
                                            @if ($asset->staff_id==NULL)
                                            <a href="{{url('assignasset-view/'.$asset->id)}}" class="badge badge-pill badge-success">Assign</a>
                                               @elseif($asset->status==NULL)
                                               <a href="{{url('assignasset-view/'.$asset->id)}}" class="badge badge-pill badge-success">Assign</a>
                                               @else
                                               <a href="{{url('unassignasset-view/'.$asset->id)}}" class="badge badge-pill badge-danger">Unassign</a> 
                                            @endif
                                          </td>
                                          <td>
                                            <a href="{{url('view-asset/'.$asset->id)}}"  data-bs-target="#ModalView{{$asset->id}}"  class="btn btn-info btn-sm">View</a>
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$asset->id}}"  class="btn btn-warning btn-sm">Edit</i></a>
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$asset->id}}"  class="btn btn-danger btn-sm">Delete</i></a>
                                            {{-- @include('store.assets.vie')   --}}
                                        </td>
                                          @include('store.assets.delete')
                                          @include('store.assets.edit')
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

    <div class="modal fade" id="assetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Asset</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-asset')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                     <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Category</label></div>
                        <div class="col-12 col-md-9">
                            <select name="cate_id" id="SelectLm" class="form-control">
                                <option value="0">--Select Category--</option>
                                @foreach ($categories as $item)  
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                            Vendor</label></div>
                        <div class="col-12 col-md-9">
                            <select name="vendor_id" id="SelectLm" class="form-control">
                                <option value="0">--Vendor--</option>
                                @foreach ($vendors as $item)  
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                            ReceivedBy
                            </label></div>
                        <div class="col-12 col-md-9">
                            <select name="user_id" id="SelectLm" class="form-control">
                                <option value="0">--Select the Receiver-Name--</option>
                                @foreach ($users as $item)  
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                            Brand</label></div>
                        <div class="col-12 col-md-9">
                            <select name="brand_id" id="SelectLm" class="form-control">
                                <option value="0">--Brand--</option>
                                @foreach ($brands as $item)  
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                            Status</label></div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="SelectLm" class="form-control">
                                <option value="0">--Status--</option> 
                                <option value="new">New</option>
                                <option value="used">Used</option>
                                <option value="broken">Broken</option>
                                <option value="repaired">Repaired</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="name"
                        placeholder="Name" class="form-control" required>
                        </div>
                    </div>
                       <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Flug</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="flug" 
                                            value="option1" class="form-check-input">Flug
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