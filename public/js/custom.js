function show_success_alert(elem, html) {
    $(elem).removeClass().html("");
    $(elem).addClass("alert alert-dismissible alert-success");
    $(elem).html(html);
    $(elem).show();
    $(elem).delay(6000).slideUp(500);
}

function show_error_alert(elem, html) {
    $(elem).removeClass().html("");
    $(elem).addClass("alert alert-dismissible alert-danger");
    $(elem).html(html);
    $(elem).show();
}

$(".alert-success").fadeTo(6000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
