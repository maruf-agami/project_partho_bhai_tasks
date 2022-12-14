<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="shortcut icon" href="Assets/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <!-- <style>
        /* <?php include_once dirname(dirname(dirname(__FILE__))) . "/dipnibas/CSS/main.css"; ?>
        */
        </style> -->

        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js">
        </script>



        <!-- Optional JavaScript -->
        <?php include_once dirname(dirname(dirname(__FILE__))) . "/dipnibas/shared/layout/header.php"; ?>
        <script>
            $(`title`).text("About | University of Pennsylvania");
        </script>




        <title>About | University of Pennsylvania</title>
    </head>
    <style>
        .container-div {
            max-width: 1400px;
        }

        .blue-font {
            color: #011F5B;
        }

        p {
            line-height: 25px;
            font-size: 16px
        }

        .fact__figure {
            border-right: 1px solid #DFDFDF;
            height: 170px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .fact__title {
            font-size: 50px;
        }

        .fact__figure.start {
            border-left: 1px solid #DFDFDF;
        }

        .intro {
            max-width: 1000px;
            line-height: 35px;
            font-size: 20px;
            color: black;
        }

        .facts__button a {
            color: #011F5B;
            font-size: 12px;
            font-weight: bold;
            border-radius: 35px
        }

        .facts__button a:hover {
            color: white;
            background-color: #011F5B;
        }

        .card-div {


            height: auto;
            background-color: #F2F2F2;
        }

        .card-div>.row {
            max-width: 90%;
        }

        .more-about {
            max-width: 85%;
        }

        .content-gallery__column {
            width: 40%;
            /* max-width: 40%; */
        }

        .gallery-card__text {
            max-width: 8 0%
        }

        .text-cta__title {
            margin-bottom: 25px;
        }

        .link-list__title {
            font-size: 12px;

        }

        .link-list__list {
            padding-left: 0;
        }

        .link-list__item {

            /* border-bottom: 1px solid black; */
            padding: 20px 0;
            list-style: none;
        }

        /* .penn-global {
            background-color: #F2F2F2;
        } */




        @media only screen and (max-width:576px) {}

        @media only screen and (max-width: 768px) {
            .intro {
                font-size: 16px;
            }
        }

        @media only screen and (max-width:992px) {
            .container-div {
                /* width:90%; */
            }

            .first-left {
                margin: 20px 35px 60px 35px;
            }

            .fact__figure {
                border-right: 0;
                border-bottom: 1px solid #DFDFDF;

            }

            .fact__figure.start {
                border-left: 0;
            }

            .intro-div {
                width: 100%;
            }

            /* .content-gallery__column {
                max-width: 40%;
            } */
        }

        @media only screen and (max-width:1200px) {
            .container-div {

                /* width: 75%; */
            }

            /* .content-gallery__column {
                max-width: 45%;
            } */
        }

        /* @media only screen and (max-width:1500px) {
            .container-div {
                width: 100%
            }
        } */
    </style>
</head>

<body>
    <div id="nav_container_div" class="bg-light">
        <?php include_once dirname(__FILE__) . "/navigation.php"; ?>
    </div>
    <header class="mt-4 container-div mx-auto p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-3 d-flex align-items-center justify-content-left">
                <div class="first-left mr-4">
                    <div class="h6 d-none d-lg-block">
                        HOME / ABOUT
                    </div>
                    <div class="h1">
                        About
                    </div>
                    <article class="d-flex align-items-start justify-content-center mb-5">
                        <img class="mr-3 d-none d-md-block" src="Assets/about-sm-1.jpg" alt="">
                        <div class="">
                            <h5 class="mb-1">
                                <a href="#">Introduction to Penn</a>
                            </h5>
                            <p class="m-0">Penn has a proud tradition of translating knowledge
                                into
                                social-minded action that dates back to our founder Benjamin
                                Franklin.</p>
                        </div>
                    </article>
                    <article class="d-flex align-items-start justify-content-center mb-5">
                        <img class="mr-3 d-none d-md-block" src="Assets/about-sm-2.jpg" alt="">
                        <div>
                            <h5 class="mb-1">
                                <a href="#">Trustees & Administration</a>
                            </h5>
                            <p class="m-0">Learn about the people who look after the
                                University???s well-being and oversee its academic and business
                                operations.</p>
                        </div>
                    </article>
                    <article class="d-flex align-items-start justify-content-center">
                        <img class="mr-3 d-none d-md-block" src="Assets/about-sm-3.jpg" alt="">
                        <div>
                            <h5 class="mb-1">
                                <a href="#">The President's Website</a>
                            </h5>
                            <p class="m-0">Explore President Liz Magill's involvement in
                                selected
                                campus and world events, and read about her background, and the
                                functions of her office.</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="">
                    <img class="" src="Assets/about-lg-1.jpg" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
        <div class="my-5 intro-div">
            <p class="h5 intro px-3">Penn???s academics are boosted by its inherent culture and
                ecosystem of
                innovation. You name it, if it???s cutting-edge, the University???s faculty???and
                students???have their hands in it. Grounded in the liberal arts and sciences and
                enriched by the integrated resources of four undergraduate and 12 graduate schools,
                Penn offers students an unparalleled education informed by inclusivity, intellectual
                rigor, research, and the impetus to create new knowledge to the benefit of
                individuals and communities around the world.</p>
        </div>
    </header>
    <div class="penn-facts text-center container my-5">
        <div class="header h1 blue-font mb-5">
            Penn Facts
        </div>
        <div class="row px-3">
            <div class="col-lg-4 col-md-12 p-0">
                <figure class="fact__figure start">
                    <p class="fact__title blue-font">1740</p>
                    <figcaption class="fact__caption blue-font"> Year Founded
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-col-12 p-0">
                <figure class="fact__figure">
                    <p class="fact__title blue-font">5,093</p>
                    <figcaption class="fact__caption blue-font"> Total Faculty Member
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-12  p-0">
                <figure class="fact__figure end">
                    <p class="fact__title blue-font">6:1</p>
                    <figcaption class="fact__caption blue-font"> Student-Faculty Ratio
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="facts__button mt-3">
            <a href="#" class="btn btn-outline-light px-5 py-4">ALL PENN FACTS</a>
        </div>
    </div>
    <Card></Card>
    <script type='module'>
        import {
            agamiCard,
            cardImgType3
        } from "./about.js";

        const data = [{
                title: "title 1",
                body: "body 1",
                src: "https://cdn.pixabay.com/photo/2015/10/01/17/17/car-967387__340.png"
            },
            {
                title: "title 2",
                body: "body 2",
                src: "https://cdn.pixabay.com/photo/2015/10/01/17/17/car-967387__340.png"
            }
        ]
        const ImgCardContainer = document.getElementsByTagName('Card')[0];
        ImgCardContainer.append(cardImgType3("sdfsd", "sdffds", "sdfsdf"));

        const Card = document.createElement("Card");
        console.log(Card);

        for (let i = 0; i < data.length; i++) {
            Card.append(agamiCard(data[i].title, data[i].body, data[i].src))

        }
    </script>
    <div class="card-div d-flex align-items-center">
        <div class="row mx-auto">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width:100%; min-height:510px;">
                    <img class="card-img-top" src="Assets/about-card-1.jpg" alt="Card image cap">
                    <div class="card-body p-5">
                        <h5 class="card-title">
                            <a href="">Sustainability</a>
                        </h5>
                        <p class="card-text">Penn is dedicated to promoting a sustainable culture
                            and implementing environmentally conscious policies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width:100%; min-height:510px;">
                    <img class="card-img-top" src="Assets/about-card-2.jpg" alt="Card image cap">
                    <div class="card-body p-5">
                        <h5 class="card-title">
                            <a href="">A Rich History</a>
                        </h5>
                        <p class="card-text">As America???s first university, Penn has a history that
                            dates back to 1740 and shares many ties with the colonial city of
                            Philadelphia and the birth of the nation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width:100%; min-height:510px;">
                    <img class="card-img-top" src="Assets/about-card-3.jpg" alt="Card image cap">
                    <div class="card-body p-5">
                        <h5 class="card-title">
                            <a href="">Visit Penn</a>
                        </h5>
                        <p class="card-text">We invite you to spend time on campus and see the many
                            ways our diverse community brings excitement and discovery to Penn???s
                            grand buildings and state-of-the-art facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-about row justify-content-between mx-auto my-5">
        <div class="content-gallery__column col-md-6 col-sm-12 p-0 d-flex justify-content-center">
            <div class="col-11">
                <div class="gallery-slider">
                    <div class="gallery">
                        <div class="gallery-card">
                            <img src="Assets/more-about.jpg" class="w-100 h-auto"
                                alt="Students celebrating Hey Day in front of the campus LOVE statue"
                                class="gallery-card__image">
                            <div class="gallery-card__controls">
                                <p class="gallery-card__text w-75 mt-4">
                                    Members of the junior class celebrating Hey Day, the day they
                                    become
                                    seniors, on College Green.
                                </p>

                            </div>
                        </div>

                    </div>
                    <div class="gallery__navigation">
                        <div class="gallery__arrows"></div>
                        <div class="gallery__dots"></div>
                    </div>
                </div>
            </div>


        </div>
        <!-- <div class="col-lg-2 d-none d-lg-block"></div> -->

        <div class="content-gallery__column col-md-6 col-sm-12 p-0 d-flex justify-content-center">
            <div class="col-11">
                <div class="text-cta">

                    <h2 class="text-cta__title blue-font ">More About Penn</h2>

                </div>
                <div class="link-list">
                    <h3 class="link-list__title blue-font">
                        EXPROLE
                    </h3>
                    <ul class="link-list__list">
                        <li class="link-list__item border-bottom">
                            <a href="#" class="link-list__link blue-font">Facts</a>
                        </li>
                        <li class="link-list__item border-bottom">
                            <a href="#" class="link-list__link blue-font">Policies</a>
                        </li>
                        <li class="link-list__item">
                            <a href="#" class="link-list__link blue-font">News, Media, &amp;
                                Communications Services</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="penn-global my-5 mx-auto">
        <?php include_once dirname(__FILE__) . "/accordion.php" ?>
    </div>
    <div>
        <?php include_once dirname(__FILE__) . "/footer.php"; ?>
    </div>
    <script>

    </script>





</body>

</html>