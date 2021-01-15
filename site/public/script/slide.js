
	$(document).ready(function () {
    var stt = 0;
    var endImg = $("img.slide:last").attr("idx");
    $("#next").click(function () {
        if (++stt > endImg-1) {
            stt = 0;
        }
        $("img.slide").hide();
        $("img.slide").eq(stt).show();

    });
    $("#prev").click(function () {
        if (--stt < 0) {
            stt = endImg -1;
        }
        $("img.slide").hide();
        $("img.slide").eq(stt).show();

    });
    var interval;
var timer = function () {
    interval = setInterval(function () {
        $("#next").click();
    }, 5000);
};

timer();
});



