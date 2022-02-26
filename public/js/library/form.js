var myForm = function (form, method = "POST") {

    var _this = this;
    this.form = form;
    this.data = function () {
        return new FormData(this.form[0]);
    };
    this.action = function () {
        return this.form.attr('action');
    };
    this.errorArea = $(".alert-danger", this.form);
    this.successArea = $(".alert-success", this.form);
    this.submitButon = $("button[type='submit']", this.form);
    this.buttonText = this.submitButon.html();
    this.type = method;
    // this.formLoader = $("#form-loader").clone().attr('Id',"");

    this.submit = function (options) {
        $.ajax({
            url: this.action(),
            data: this.data(),
            processData: false,
            contentType: false,
            type: this.type,
            beforeSend: function () {
                // _this.form.prepend(_this.formLoader);
                // _this.formLoader.fadeIn('slow');
                _this.submitButon.prop('disabled', true);
                // _this.submitButon.html('Submitting...');

                if (options.hasOwnProperty('loadingText')) {
                    _this.submitButon.html(options.loadingText);
                } else {
                    _this.submitButon.html('Submitting...');

                }

            },
            success: function (response) {
                // console.log(response);
                // $('.error').removeClass('error');

                // _this.errorArea.hide();
                // _this.successArea.show();
                // _this.successArea.html("<strong>" + response.message + "</strong>");
                // alert(response.message);
                _this.submitButon.prop('disabled', false);

                //call callback function
                _this.submitButon.prop('disabled', false);
                _this.submitButon.html(_this.buttonText);
                // _this.formLoader.fadeOut('slow');
                if (options.hasOwnProperty('success')) {
                    if (options.success.resetForm == true) _this.form.trigger("reset");
                    if ($.isFunction(options.success.callback)) options.success.callback(response);
                }
                Modal.close();
                Url.load();

            }
        }).fail(function (Error) {
            $('.error').removeClass('error');
            // _this.submitButon.prop('disabled',false);
            var error = JSON.parse(Error.responseText);
            _this.successArea.hide();
            _this.errorArea.show();
            _this.errorArea.html("<strong>" + error['message'] + "</strong>");
            toastr.error(error['message']);
            errorMsg = "";
            if (error['errors'] !== undefined) {
                $.map(error['errors'], function (errors, field) {
                    console.log(errors[0], field);
                    $("#" + field, _this.form).addClass('error');
                    $("#" + field, _this.form).find(".error-message").text(errors[0]);
                    errorMsg += "<li>" + errors[0] + "</li>";
                });

                $("#" + Object.keys(error['errors'])[0]).find('input').focus();
                // $("#url").find('input').focus();
                if ('error' in options) {

                    if ('callback' in options.error) {

                        if ($.isFunction(options.error.callback)) {
                            options.error.callback(Error);
                        }
                    }
                }

            }

            _this.errorArea.append("<ul>" + errorMsg + "</ul>");
            _this.submitButon.prop('disabled', false);
            _this.submitButon.html(_this.buttonText);
            // _this.formLoader.fadeOut('slow');
            // _this.formLoader.remove();
        });
    }
}

function submitForm(el) {
    var form = new myForm(el);
    form.submit({});
}
