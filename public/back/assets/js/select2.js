
$(".js-select2").select2({
    closeOnSelect : true,
    placeholder : "Enter name",
    allowHtml: true,
    allowClear: true,
    search: true,
    selectAll: true,
    tags: true // создает новые опции на лету
});

    function iformat(icon, badge,) {
            var originalOption = icon.element;
            var originalOptionBadge = $(originalOption).data('badge');
         
            return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '<span class="badge">' + originalOptionBadge + '</span></span>');
        }
