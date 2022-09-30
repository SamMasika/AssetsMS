jQuery( document ).ready(function( $ ) {
    $('.detail-btn').click(function (e) { 
        e.preventDefault();
        // alert('hello');
        var asset_id=$(this).closest().find().text(); 
    });
});