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
                        <input type="text" class="form-control" name="name" value="{{$roles->name}}">
                    </div>
                    <div class="mt-5" style="center">
                    @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                        <br/>
                    @endforeach
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