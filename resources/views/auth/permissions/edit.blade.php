@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                       <h5>Edit Permission</h5> 
                    </div>
                    <div class="card-body">
                        <form action="{{url('update-permission/'.$permissions->id)}}" method="post">
                            @csrf
                            <div class="">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$permissions->name}}">
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