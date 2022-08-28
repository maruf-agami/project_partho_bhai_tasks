var newsMenuHover = false;
var newsMenuButtonHover = false;
// News Dropdown Styles--------------------------------------
$(`.newsDiv`).css({
    display: "none",
});

$(`#news-dropdown`).on("mouseenter", function () {
    console.log("object");
    $(`#news-dropdown`).css({
        backgroundColor: "#355E93",
    });
    $(`.newsDiv`).css({
        display: "block",
    });
});

$(`#news-dropdown`).on("mouseleave", function () {
    $(`#news-dropdown`).css({
        backgroundColor: "#343A40",
    });

    $(`.newsDiv`).css({
        display: "none",
    });
});

// Spotlight Dropdown Styles--------------------------------
$(`.spotlightDiv`).css({
    display: "none",
});
$(`#spotlightDropdown`).on("mouseenter", function () {
    $(`#spotlightDropdown`).css({
        backgroundColor: "#355E93",
    });
    $(`.spotlightDiv`).css({
        display: "block",
    });
});

$(`#spotlightDropdown`).on("mouseleave", function () {
    $(`#spotlightDropdown`).css({
        backgroundColor: "#343A40",
    });
    $(`.spotlightDiv`).css({
        display: "none",
    });
});

// About Dropdown Styles------------------------------------
$(`.aboutDiv`).css({
    display: "none",
});
$(`#aboutDropdown`).on("mouseenter", function () {
    $(`#aboutDropdown`).css({
        backgroundColor: "#355E93",
    });
    $(`.aboutDiv`).css({
        display: "block",
    });
});

$(`#aboutDropdown`).on("mouseleave", function () {
    $(`#aboutDropdown`).css({
        backgroundColor: "#343A40",
    });
    $(`.aboutDiv`).css({
        display: "none",
    });
});

$(`#news-dropdown`).on("mouseleave", function () {
    newsMenuButtonHover = true;
    // console.log("h1");
    console.log("buttonUnhovered:", newsMenuButtonHover);
    // unhoverNews();
});

$(`.news-menu`).on("mouseleave", function () {
    newsMenuHover = true;
    console.log("newsUnhovered: ", newsMenuHover);
    // unhoverNews();
});

// function unhoverNews() {
//     if (newsMenuHover && newsMenuButtonHover) {
//         $(`.news-menu`).css("display", "none");
//         console.log("object");
//         newsMenuButtonHover = false;
//         newsMenuHover = false;
//     }
// }
