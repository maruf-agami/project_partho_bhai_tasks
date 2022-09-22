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

        <!-- Optional JavaScript -->
        <?php include_once dirname(dirname(dirname(__FILE__))) . "/dipnibas/shared/layout/header.php"; ?>
        <script>
            $(`title`).text("About | University of Pennsylvania");
        </script>



        <title>About | University of Pennsylvania</title>
    </head>
    <style>
        .container-div {
            width: 90%;
        }

        .blue-font {
            color: #011F5B;
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

        @media only screen and (max-width: 992px) {
            .fact__figure {
                border-right: 0;
                border-bottom: 1px solid #DFDFDF;

            }

            .fact__figure.start {
                border-left: 0;
            }
        }
    </style>
</head>

<body>
    <header class="mt-4 container mx-auto p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0 d-flex align-items-center justify-content-left">
                <div class="">
                    <div class="h6 d-none d-lg-block">
                        HOME / ABOUT
                    </div>
                    <div class="h1">
                        About
                    </div>
                    <article class="d-flex align-items-center justify-content-center mb-3">
                        <img class="mr-3 d-none d-md-block" src="Assets/about-sm-1.jpg" alt="">
                        <div class="">
                            <h2>
                                <a href="#">Introduction to Penn</a>
                            </h2>
                            <p class="m-0">Penn has a proud tradition of translating knowledge into social-minded action that dates back to our founder Benjamin Franklin.</p>
                        </div>
                    </article>
                    <article class="d-flex align-items-center justify-content-center mb-3">
                        <img class="mr-3 d-none d-md-block" src="Assets/about-sm-2.jpg" alt="">
                        <div>
                            <h2>
                                <a href="#">Trustees & Administration</a>
                            </h2>
                            <p class="m-0 w-75">Learn about the people who look after the University’s well-being and oversee its academic and business operations.</p>
                        </div>
                    </article>
                    <article class="d-flex align-items-center justify-content-center">
                        <img class="mr-3 d-none d-md-block" src="Assets/about-sm-3.jpg" alt="">
                        <div>
                            <h2>
                                <a href="#">The President's Website</a>
                            </h2>
                            <p class="m-0">Explore President Liz Magill's involvement in selected campus and world events, and read about her background, and the functions of her office.</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="w-100">
                    <img class="img-fluid" src="Assets/about-lg-1.jpg" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
        <div class="my-5 mx-2 d-flex justify-content-center">
            <p class="h5">Penn’s academics are boosted by its inherent culture and ecosystem of innovation. You name it, if it’s cutting-edge, the University’s faculty—and students—have their hands in it. Grounded in the liberal arts and sciences and enriched by the integrated resources of four undergraduate and 12 graduate schools, Penn offers students an unparalleled education informed by inclusivity, intellectual rigor, research, and the impetus to create new knowledge to the benefit of individuals and communities around the world.</p>
        </div>
    </header>
    <div class="penn-facts text-center container my-5">
        <div class="header h1 blue-font ">
            Penn Facts
        </div>
        <div class="row">
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
        <div class="facts__button">
            <a href="/about/facts" class="btn btn-outli ne">All Penn Facts</a>
        </div>
    </div>
</body>

</html>