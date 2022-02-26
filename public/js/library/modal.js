var Modal = {
    show: function (el) {
        var model = $('#exampleModal');
        model.find(".modal-title").text(el.attr('data-title'));
        let url = el.attr('data-url');
        $.get(url, function (response) {
            model.find('.modal-body').html(response);
            formPrevent();
            model.modal('show');
        });
    },
    close: function () {

        setTimeout(function () {
            var model = $('#exampleModal');
            model.modal('hide');
        }, 500);
    }
}
