 @extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Category-List
                            <a href="#" class="btn btn-success float-right"  data-bs-toggle="modal" data-bs-target="#productModal">
                                <i class="fa fa-plus">Add-Category</i></a>
                        </h3>
                    </div>
                        <div class="table-responsive">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->desc}}</td>
                                            <td>
                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$category->id}}" class="btn btn-warning btn-sm">Edit</a>
                 
                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#ModalDelete{{$category->id}}" class="btn btn-danger btn-sm">Delete</i></a>
                                                @include('store.category.delete')
                                                @include('store.category.edit')
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

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-category')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                            placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"></label>Description</div>
                        <div class="col-12 col-md-9"><textarea name="desc" id="textarea-input" rows="3" placeholder="Description" class="form-control"></textarea></div>
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