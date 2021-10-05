// console.log($(window).width());

var width = $(window).width();
var height = $(window).height();

if (width >= 990) {} else {
    $("#goUp").removeClass("order-1");
    $(".nextRow").show();
}

$(window).resize(function() {
    if (window.matchMedia('(max-width: 990px)').matches) {
        // console.log("small");
        $("#goUp").removeClass("order-1");
        $(".nextRow").show();
    } else {
        $("#goUp").addClass("order-1");
        $(".nextRow").hide();
    }
});