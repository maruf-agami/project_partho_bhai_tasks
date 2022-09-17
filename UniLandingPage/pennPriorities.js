


// var slidesInfo;
// function getSlidesInfo() {
//     return new Promise((resolve, reject) => {
//         $.ajax({
//             type: "POST",
//             url: "pennPriorities.json",
//             dataType: "json",
//             success: function (response) {
//                 resolve(response);
//             },
//             error: () => reject(),
//         });
//     });
// }
// let slidesInfoPromise = getSlidesInfo();
// slidesInfoPromise.then((result) => {
//     displaySlides(result);
// });

// function displaySlides(slideInfo) {
//     $.each(slideInfo, (index, slide) => {
//         console.log(slide);
//         $(`.slider`).append(`
//         <div class="details" style="margin-right:150px;">
//                 <img class=""
//                     src="${slide.imageURL}"
//                     alt="First slide">
//         </div>
//         `);
//     });
// }


$('.slider').slick({
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