@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Role</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('update-role/'.$roles->id)}}" method="post">
                            @csrf
                            <div class="mt-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$roles->name}}" readonly>
                    </div>
                    {{-- <div class="mt-5" style="center">
                    @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                        <br/>
                    @endforeach --}}
                    <div class="row form-group py-5">
                        <div class="col col-md-3"><label for="selectSm" class="">
                            Permission Name</label></div>
                        <div class="col-12 col-md-9"> 
                       <select class="js-select2 form-control" name="permission[]" id="permissionName" multiple="multiple" >
                           @foreach($permission as $value)
                           <option <?php if (in_array($value->id,$rolePermissions)) { echo "selected"; } ?> 
                            value="{{ $value->id }}">{{ $value->name }}</option> 
                           @endforeach
                       </select>
                
                   </div>
                 </div>
                
                        <button type="submit" class="btn btn-primary mt-3 float-right">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


@section('scripts')
    
@endsection