@extends('layouts.back')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"> 
                    <h4>Unassign Asset</h4>
                </div>    
                <div class="card-body">
                    <form action="{{url('unassignasset-view/'.$assets->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="mt-2">
                        <input type="text" class="form-control" name="name" value={{$assets->name}} readonly>
                           </div>
                           <div class="row form-group py-5">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="SelectLm" class="form-control">
                                    <option value={{$assets->status}}>{{$assets->status}}</option> 
                                    <option value="used">Used</option>
                                    <option value="broken">Broken</option>
                                    <option value="repaired">Repaired</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Reason For Return</label></div>
                            <div class="col-12 col-md-9"><textarea name="reason" id="textarea-input" rows="3" maxlength = "40" placeholder="Content..." class="form-control" required></textarea></div>
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
