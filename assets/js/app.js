import 'bootstrap/dist/js/bootstrap.bundle';
import 'jquery.cookie/jquery.cookie'

$(window).on('load', function () {
    if (typeof $.cookie('role') === 'undefined') {
        $('#selectRole').modal();
    }
});
