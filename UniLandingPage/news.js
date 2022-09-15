var allSmallNews;
function getAllSmallNews() {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "news.json",
            dataType: "json",
            success: function (response) {
                resolve(response);
            },
            error: () => reject(),
        });
    });
}
let allSmallNewsPromise = getAllSmallNews();
allSmallNewsPromise.then((result) => {
    displaySmallNews(result);
});

function displaySmallNews(news) {
    $.each(news, (index, value) => {
        $(`#small_news_card_container_div`).append(`
        <div class="col mb-5">
            <div class="card" style="width: 19rem;">
                <img class="card-img-top"
                    src="${value.newsImgURL}"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title
                        and make
                        up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        `);
    });
}
