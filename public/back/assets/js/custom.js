$(document).ready(function() {
    var table = $('#assets').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );



