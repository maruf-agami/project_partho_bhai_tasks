var newsMenuHover = false;
var newsMenuButtonHover = false;
$(`#news-dropdown`).on("mouseenter", function () {
    $(`.news-menu`).css({
        display: "block",
        position: "absolute",
        backgroundColor: "black",
        color: "white",
        left: "30%",
    });
});

$(`#news-dropdown`).on("mouseleave", function () {
    newsMenuButtonHover = true;
    // console.log("h1");
    console.log("buttonUnhovered:", newsMenuButtonHover);
    unhoverNews();
});

$(`.news-menu`).on("mouseleave", function () {
    newsMenuHover = true;
    console.log("newsUnhovered: ", newsMenuHover);
    unhoverNews();
});

function unhoverNews() {
    if (newsMenuHover && newsMenuButtonHover) {
        $(`.news-menu`).css("display", "none");
        console.log("object");
        newsMenuButtonHover = false;
        newsMenuHover = false;
    }
}
