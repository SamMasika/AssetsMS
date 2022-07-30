@extends('layouts.back')

@section('content')
    
<div class="col">
    <div class="card">
        <div class="card-header">
            <strong>User Details</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Role</label></div>
                    @foreach ($roles as $role)
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$role->name}}"></div>
                     </div>
                    @endforeach
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">FirsName</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$users->name}}"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">LastName</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name=""readonly class="form-control" value="{{$users->lname}}"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$users->email}}"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Phone</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="" readonly class="form-control" value="{{$users->phone}}"></div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection