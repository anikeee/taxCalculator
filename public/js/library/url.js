var Url = {
    load: function (url = null) {
        if (url == null) {
            url = window.location.href;
            console.log(url);
            // $("#app").load(url);
            $.get(url, function (response) {
                const parser = new DOMParser();
                const mainHtml = $(parser.parseFromString(response, "text/html"));
                const mainApp = mainHtml.find("#app");
                mainApp.find(".preloader").remove();
                $("#app").html(mainApp.html());
            }, 'html');
            // console.log(url);
            // console.log("Ok");
            // setTimeout(window.location.reload(), 500);
        } else {
            window.location.replace(url)
        }
    }
}
