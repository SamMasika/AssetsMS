@extends('layouts.back')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"> 
                    <h4>Assing Asset</h4>
                </div>    
                <div class="card-body">
                    <form action="{{url('assets-assign/'.$assets->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="mt-2">
                        <input type="text" class="form-control" name="name" value={{$assets->name}}>
                           </div>
                           <div class="mt-5">
                               @foreach ($staffs as $item)
                               <div>
                                    <input type="checkbox" id="staff_id" name="staff_id" value="{{$item->id}}">
                                    <label for="staff_id">{{$item['fname']}}</label>
                                </div>
                             @endforeach
                           </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary btn-sm float-right">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </div>
                    </form>
                </div>    
            </div>    
        </div>    
    </div>    
   </div>    
@endsection
