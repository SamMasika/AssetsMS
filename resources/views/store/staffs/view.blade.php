@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                       
                        <h3>Staff-List</h3>
                       
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                       <th>ID</th>
                                        <th>FullName</th>
                                        <th>AssetName</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stafAs as $staf)
                                        <tr>
                                            <td>{{$staf->id}}</td>
                                            <td>{{ $staf->staff->name }}</td>
                                               <td>{{$staf->asset->name}}</td>    
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staffAsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Staff Assigned Assets</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                                <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>AssetName</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stafAs as $staf)
                                            <tr>
                                                <td>{{ $staf->staff->fname }}</td>
                                                <td>{{ $staf->staff->lname }}</td>
                                                   <td>{{$staf->asset->name}}</td>    
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                         </div>
                </div>
        </div>
 </div>
   
    @endsection
