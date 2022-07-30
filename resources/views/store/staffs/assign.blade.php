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
                    <form action="{{url('assign-asset/'.$staffs->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="mt-2">
                        <input type="text" class="form-control" name="name" value={{$staffs->name}}>
                           </div>
                           <div class="mt-5">
                               @foreach ($assets as $item)
                               <div>
                                    <input type="checkbox" id="asset_id" name="asset_id" value="{{$item->id}}">
                                    <label for="asset_id">{{$item['name']}}</label>
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
