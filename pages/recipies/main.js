console.log($(window).width());

var width = $(window).width();
var height = $(window).height();

if (width >= 990) {} else {
    $("#cards").removeClass("row");
    $("#cards").addClass("col");
    $('a[href="#recipies"]').attr("href", "./mobile/index.html");
}

$(window).resize(function() {
    if (window.matchMedia('(max-width: 990px)').matches) {
        // small
        $("#cards").removeClass("row");
        $("#cards").addClass("col");
        $('a[href="#recipies"]').attr("href", "./mobile/index.html");
    } else {
        // big
        $("#cards").addClass("row");
        $("#cards").removeClass("col");
    }
});

function next() {
    $(".carousel-control-prev").removeAttr("style");
    console.log("hello");
}


function changeImage(a) {
    switch (a) {
        case 1:
            document.getElementById('ingImg').src = "https://5.imimg.com/data5/SELLER/Default/2020/9/HJ/EE/FZ/106270270/yellow-bell-pepper-500x500.jpeg";
            break;
        case 2:
            document.getElementById('ingImg').src = "https://www.browneyedbaker.com/wp-content/uploads/2020/04/pizza-dough-12-square.jpg";
            break;
        case 3:
            document.getElementById('ingImg').src = "https://news.cgtn.com/news/2020-07-05/China-s-appetite-for-olive-oil-slowly-growing-as-eating-habits-change-RS5JIrjy1y/img/a6126c224fc046cb8a7a959dc66ee0a8/a6126c224fc046cb8a7a959dc66ee0a8.jpeg";
            break;
        case 4:
            document.getElementById('ingImg').src = "https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F744818.jpg";
            break;
        case 5:
            document.getElementById('ingImg').src = "https://foodandstyle.com/wp-content/uploads/2011/08/IMG_7308-Homemade-ricotta-750.jpg";
            break;
        case 6:
            document.getElementById('ingImg').src = "https://image.shutterstock.com/image-photo/italian-prosciutto-crudo-jamon-rosemary-260nw-710970187.jpg";
            break;
        case 7:
            document.getElementById('ingImg').src = "https://www.crushpixel.com/big-static13/preview4/fresh-basil-leaves-plant-tree-1184640.jpg";
            break;
        case 8:
            document.getElementById('ingImg').src = "https://i.ebayimg.com/images/g/gSYAAOSwVFlT5FIz/s-l300.jpg";
            break;
        case 9:
            document.getElementById('ingImg').src = "https://c.ndtvimg.com/2019-02/e0s1elrg_balsamic-vinegar_625x300_03_February_19.jpg";
            break;
    }
}