@extends('layouts.back')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"> 
                    <h4>Assign Asset</h4>
                </div>    
                <div class="card-body">
                    <form action="{{url('assets-assign/'.$assets->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                     
                           <div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                        placeholder="Name" class="form-control" value="{{ $assets->name }}" readonly>
                                </div>
                            </div>
                           <div class="row form-group py-5">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                Status</label></div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="SelectLm" class="js-select2 form-control">
                                    <option value={{$assets->status}}>{{$assets->status}}</option> 
                                    <option value="new">New</option>
                                    <option value="used">Used</option>
                                    <option value="repaired">Repaired</option>
                                </select>
                            </div>
                        </div>
                           <div class="row form-group py-5">
                            <div class="col col-md-3"><label for="selectSm" class="">
                                Staff Name</label></div>
                            <div class="col-12 col-md-9"> 
                            <select class="js-select2 form-control" name="user_id" id="user_id">
                             
                                <option value="" data-badge=""></option>
                                <option value="{{ $request->user->id }}" data-badge="">{{ $request->user->name }}</option>
                               
                            </select>
                        </div>
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

@push('scripts')
<script type="text/javascript">
    $(function(){
        $('#asset_staff').multiSelect();
    });
</script>
@endpush
