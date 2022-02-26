function formPrevent() {
    console.log("Called");
    $('form').on('submit', function(e) {
        e.preventDefault();
        submitForm($(this));
    });
}
$(document).ready(function () {
    formPrevent();
});
