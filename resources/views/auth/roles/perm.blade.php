@extends('layouts.back')

@section('content')
  <div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>Role's Permissions

                        <a href="{{url('roles-list')}}" class="btn btn-success float-right" >
                            <i class="fa fa-arrow-back">Back</i></a>
                    </h3>
                </div>
                    <div class="table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                  <th></th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $perm)
                                <tr> 
                                  <td></td>
                                    <td>{{$perm->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

