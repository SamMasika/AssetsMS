$(document).ready(function(){

    // DataTable
   $('#empTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl+"getStaffAssigned?id=" + id,
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'condtn' },
            { data: 'condtn_i' },
            { data: 'reason' },
            { data: 'assigned' },
            { data: 'created_at' },
        ]
    });

 });