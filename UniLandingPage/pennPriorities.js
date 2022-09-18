// var slidesInfo;
function getSlidesInfo() {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "pennPriorities.json",
            dataType: "json",
            success: function (response) {
                resolve(response);
            },
            error: () => reject(),
        });
    });
}
let slidesInfoPromise = getSlidesInfo();
slidesInfoPromise
    .then((data) => {
        displaySlides(data);
    })
    .then(() => {
        $(`.slider`).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            // asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true,
            centerMode: true,
            variableWidth: true,
            touchThreshold: 10,
        });
        resolve();
    })
    .catch((error) => {
        console.log(error);
        reject();
    });

function displaySlides(slideInfo) {
    $.each(slideInfo, (index, slide) => {
        console.log(slide);
        $(`.slider`).append(`
        <div class="details position-relative" style="margin-right:90px;">
            <img class="img-fluid"
                    src="${slide.imageURL}"
                    alt="First slide">
            <div class="input-group position-absolute fixed-bottom">
                <h4 class="bg-light m-0 text-dark p-3">${slide.title}</h4>
                <div class="input-group-prepend">
                    <div class="input-group-text bg-danger border-0 text-light p-4" id="btnGroupAddon">⮞</div>
                </div>
            </div>
        </div>
        `);
    });
}
