var date = new Date();
var b = date.getMinutes();
var i2 = b * 1.8;
i2 = Math.ceil(i2) + 5;

function test() {
    i2++;
    timeR = setTimeout("test()", Math.floor(Math.random() * (60000 + 1000)) + 15000);
    if (i2 >= 129) {
        i2 = b;
    }
}
$(document).ready(function() {
    $("a[href*='#']").on("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });
});