@extends('layouts.back')

@section('content')
   
   <div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                   <h5> Assign Permission</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('assign/'.$roles->id)}}" method="post">
                        @csrf
                        <div class="row mt-3">
                    {{-- <label for="">Role</label> --}}
                    <input type="text" class="form-control " name="name" value={{$roles->name}} readonly>
                       </div>
                
                {{-- <div class="row mt-3">
                        <select class="js-example-basic-single form-control" name="permission[]" multiple>
                            @foreach ($permissions as $item)
                            <option value="{{$item['id']}}">{{$item['name']}}</option>
                            @endforeach
                          </select>
                </div> --}}
                <div class="mt-5">
                    
                    {{-- @if ($permission->exists()) --}}
                        
                    @foreach ($permissions as $item)
                       <div>
                            <input type="checkbox" id="permission" name="permission[]" value="{{$item->id}}">
                            <label for="role">{{$item['name']}}</label>
                        </div>
                        {{-- <label>{{ Form::checkbox('permission[]', $item->id, false, array('class' => 'name')) }}
                         {{ $item->name }}</label> --}}
                            @endforeach
                   </div>
                   
                <button type="submit" class="btn btn-primary float-right mt-3">Assign</button>
                    
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>
    
@endpush

