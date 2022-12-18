$(function () {
    $(document).on('click', '#makeLogout', function (e) {
        e.preventDefault();
        $('#logoutForm').trigger('submit');
    });
});
