<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="d-flex justify-content-between">
        <h2>News</h2>
        <div class="dropdown border-bottom">
            <button class="btn dropdown-toggle news-topics-dropdown" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="col mb-5">
                <div class="card" style="width: 40rem; height:45rem">
                    <img class="card-img-top" src="https://penntoday.upenn.edu/sites/default/files/styles/teaser/public/2022-09/ARCH-ribbon-cutting-main.jpg?h=56d0ca2e&itok=I1iLdh-s" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title
                            and make
                            up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row" id="small_news_card_container_div">

            </div>
        </div>

    </div>

    <script src="news.js"></script>
</body>

</html>