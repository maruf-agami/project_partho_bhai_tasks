// $('#recipeCarousel').carousel({
//     interval: 2000
// })

// $('.carousel .carousel-item').each(function () {
//     var next = $(this).next();
//     if (!next.length) {
//         next = $(this).siblings(':first');
//     }
//     next.children(':first-child').clone().appendTo($(this));

//     for (var i = 0; i < 2; i++) {
//         next = next.next();
//         if (!next.length) {
//             next = $(this).siblings(':first');
//         }

//         next.children(':first-child').clone().appendTo($(this));
//     }
// });


// const track = $(`.carousel__track`);
const track = document.querySelector(`.carousel__track`);
const slides = Array.from(track.children);
const nextButton = document.querySelector(`.carousel__button--right`);
const prevButton = document.querySelector(`.carousel__button--left`);
const dotsNav = document.querySelector(`.carousel__nav`);
const dots = Array.from(dotsNav.children);

const slideWidth = slides[0].getBoundingClientRect().width;


const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';

};
slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';

    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');
}

const updateDots = (currentDot, targetDot) => {
    currentDot.classList.remove('current-slide');
    targetDot.classList.add('current-slide');
}

prevButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;
    if (!currentSlide.previousElementSibling) {
        console.log("helsdf");
    }
    const currentDot = dotsNav.querySelector('.current-slide');
    const prevDot = currentDot.previousElementSibling;

    moveToSlide(track, currentSlide, prevSlide);
    updateDots(currentDot, prevDot);
})
nextButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    const currentDot = dotsNav.querySelector('.current-slide');
    const nextDot = currentDot.nextElementSibling;

    moveToSlide(track, currentSlide, nextSlide);
    updateDots(currentDot, nextDot);
})


dotsNav.addEventListener('click', e => {
    const targetDot = e.target.closest('button');

    if (!targetDot) return;

    const currentSlide = track.querySelector('.current-slide');
    const currentDot = dotsNav.querySelector('.current-slide');
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];

    moveToSlide(track, currentSlide, targetSlide);
    updateDots(currentDot, targetDot);
})

// console.log(slideSize);


