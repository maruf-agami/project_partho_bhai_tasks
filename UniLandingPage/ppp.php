<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/main.css">
    <script src="vendor/jquery/3.5.1/jquery-3.5.1.min.js"></script>

    <style>
        .custom_shadow {
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 2px 10px 0 rgb(0 0 0 / 10%);
        }

        .custom_shadow:hover {
            box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 10%);
        }

        .img-raised {
            box-shadow: 0 5px 15px -8px rgb(0 0 0 / 24%), 0 8px 10px -5px rgb(0 0 0 / 20%);
        }

        .header_title {
            position: relative;
        }

        .header_title::after {
            content: '';
            display: block;
            position: absolute;
            bottom: -15px;
            background: #011F5B;
            opacity: .4;
            width: 40px;
            height: 4px;
        }

        .img-hover-zoom--brightness img {
            transition: all .75s ease-in-out;
            transform-origin: center center;
            filter: brightness(90%);
        }

        .custom_card:hover img {
            filter: brightness(100%);
            transform: scale(1.2);
        }

        .ripple {
            position: relative;
            overflow: hidden;
        }

        .ripple:before {
            content: "";
            position: absolute;
            display: block;
            background: var(--ripple-background, white);
            border-radius: 50%;
            pointer-events: none;
            top: calc(var(--y) * 1px);
            left: calc(var(--x) * 1px);
            width: calc(var(--d) * 1px);
            height: calc(var(--d) * 1px);
            opacity: calc(var(--o, 1) * var(--ripple-opacity, 0.3));
            transition: calc(var(--t, 0) * var(--ripple-duration, 600ms)) var(--ripple-easing, linear);
            transform: translate(-50%, -50%) scale(var(--s, 1));
            transform-origin: center;
        }

        @media (min-width: 992px) {
            #news_section .column_divider {
                border-left: 1px solid rgba(0, 0, 0, 0.1);
            }

            #news_section .column_divider:last-child {
                border-right: 1px solid rgba(0, 0, 0, 0.1);
            }
        }
    </style>

    <script>
        $(document).on("click", `.ripple`, function(e) {
            e = e.touches ? e.touches[0] : e;
            const r = this.getBoundingClientRect(),
                d = Math.sqrt(Math.pow(r.width, 2) + Math.pow(r.height, 2)) * 2;
            this.style.cssText = `--s: 0; --o: 1;`;
            this.offsetTop;
            this.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${e.clientX - r.left}; --y:${e.clientY - r.top};`;
        });
    </script>
</head>

<body>
    <section id="news_section" class="py-5">
        <div class="container">
            <div class="h2 header_title mb-5">
                News
            </div>

            <div class="row">
                <div class="col-lg-6 column_divider">
                    <article class="custom_card bg-white mb-4 animated fadeInUp" style="animation-delay: 0ms">
                        <div class="img-hover-zoom--brightness overflow-hidden">
                            <img class="img-fluid" src="./assets/image/events/statue.jpg">
                        </div>

                        <div class="py-3">
                            <div class="text-center">
                                <a style="color: #990000;" href="" target="_blank">Arts, Humanities, & Social Sciences</a>
                            </div>
                            <div class="text-center">
                                <a class="h3" href="" target="_blank">
                                    New Stuart Weitzman Theatre to be constructed for Penn Live Arts at the Annenberg Center for the Performing Arts
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="d-none d-sm-block">
                        <hr class="mb-4">
                    </div>


                    <div class="text-center my-5">
                        <a href="news.php" class="btn btn-lg btn-primary btn-first-theme font-size-lg px-3 custom_shadow">
                            See More News
                            <!-- <i class="fas fa-angle-double-down ml-2"></i> -->
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 column_divider">
                    <article class="custom_card bg-white mb-4 animated fadeInUp" style="animation-delay: 200ms">
                        <div class="img-hover-zoom--brightness overflow-hidden">
                            <img class="img-fluid" src="./assets/image/events/statue.jpg">
                        </div>

                        <div class="py-3">
                            <div class="text-center">
                                <a style="color: #990000;" href="" target="_blank">Arts, Humanities, & Social Sciences</a>
                            </div>
                            <div class="text-center">
                                <a class="h6" href="" target="_blank">
                                    New Stuart Weitzman Theatre to be constructed for Penn Live Arts at the Annenberg Center for the Performing Arts
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="d-none d-sm-block">
                        <hr class="mb-4">
                    </div>

                    <article class="custom_card bg-white mb-4 animated fadeInUp" style="animation-delay: 400ms">
                        <div class="img-hover-zoom--brightness overflow-hidden">
                            <img class="img-fluid" src="./assets/image/events/statue.jpg">
                        </div>

                        <div class="py-3">
                            <div class="text-center">
                                <a style="color: #990000;" href="" target="_blank">Arts, Humanities, & Social Sciences</a>
                            </div>
                            <div class="text-center">
                                <a class="h6" href="" target="_blank">
                                    New Stuart Weitzman Theatre to be constructed for Penn Live Arts at the Annenberg Center for the Performing Arts
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="d-none d-sm-block">
                        <hr class="mb-4">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 column_divider">
                    <article class="custom_card bg-white mb-4 animated fadeInUp" style="animation-delay: 600ms">
                        <div class="img-hover-zoom--brightness overflow-hidden">
                            <img class="img-fluid" src="./assets/image/events/statue.jpg">
                        </div>

                        <div class="py-3">
                            <div class="text-center">
                                <a style="color: #990000;" href="" target="_blank">Arts, Humanities, & Social Sciences</a>
                            </div>
                            <div class="text-center">
                                <a class="h6" href="" target="_blank">
                                    New Stuart Weitzman Theatre to be constructed for Penn Live Arts at the Annenberg Center for the Performing Arts
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="d-none d-sm-block">
                        <hr class="mb-4">
                    </div>

                    <article class="custom_card bg-white mb-4 animated fadeInUp" style="animation-delay: 800ms">
                        <div class="img-hover-zoom--brightness overflow-hidden">
                            <img class="img-fluid" src="./assets/image/events/statue.jpg">
                        </div>

                        <div class="py-3">
                            <div class="text-center">
                                <a style="color: #990000;" href="" target="_blank">Arts, Humanities, & Social Sciences</a>
                            </div>
                            <div class="text-center">
                                <a class="h6" href="" target="_blank">
                                    New Stuart Weitzman Theatre to be constructed for Penn Live Arts at the Annenberg Center for the Performing Arts
                                </a>
                            </div>
                        </div>
                    </article>

                    <div class="d-none d-sm-block">
                        <hr class="mb-4">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="h2 header_title mb-5">
                Upcoming Events
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <article class="custom_card bg-white animated fadeInUp" style="animation-delay: 0ms">
                        <div class="position-relative">
                            <div class="img-hover-zoom--brightness overflow-hidden">
                                <img class="img-fluid" src="./assets/image/events/statue.jpg">
                            </div>
                            <div class="position-absolute text-center rounded" style="top: 10px;right: 10px;width: 45px;">
                                <div class="small text-uppercase" style="background: #990000;color: #FFF;">Sep</div>
                                <div class="font-size-xlg py-1" style="background: #FFF;color: #011F5B;">14</div>
                            </div>
                            <div class="position-absolute" style="bottom:0px;left: 0px;width: 85%;">
                                <div class="bg-white font-size-xlg pt-3">
                                    <u style="text-underline-position: under;text-decoration-style: double;">Talks</u>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <a class="h3" href="" target="_blank">60-Second Lectures</a>

                            <p class="mt-3">
                                Penn Arts &amp; Sciences brings back the 60-Second Lectures with a new twist: a comprehensive lecture featuring multiple speakers instead of weekly lectures.
                                Featured speakers include faculty staff members across various departments in Penn Arts &amp; Sciences.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="custom_card bg-white animated fadeInUp" style="animation-delay: 200ms">
                        <div class="position-relative">
                            <div class="img-hover-zoom--brightness overflow-hidden">
                                <img class="img-fluid" src="./assets/image/events/statue.jpg">
                            </div>
                            <div class="position-absolute text-center rounded" style="top: 10px;right: 10px;width: 45px;">
                                <div class="small text-uppercase" style="background: #990000;color: #FFF;">Sep</div>
                                <div class="font-size-xlg py-1" style="background: #FFF;color: #011F5B;">14</div>
                            </div>
                            <div class="position-absolute" style="bottom:0px;left: 0px;width: 85%;">
                                <div class="bg-white font-size-xlg pt-3">
                                    <u style="text-underline-position: under;text-decoration-style: double;">Talks</u>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <a class="h3" href="" target="_blank">60-Second Lectures</a>

                            <p class="mt-3">
                                Penn Arts &amp; Sciences brings back the 60-Second Lectures with a new twist: a comprehensive lecture featuring multiple speakers instead of weekly lectures.
                                Featured speakers include faculty staff members across various departments in Penn Arts &amp; Sciences.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="custom_card bg-white animated fadeInUp" style="animation-delay: 400ms">
                        <div class="position-relative">
                            <div class="img-hover-zoom--brightness overflow-hidden">
                                <img class="img-fluid" src="./assets/image/events/statue.jpg">
                            </div>
                            <div class="position-absolute text-center rounded" style="top: 10px;right: 10px;width: 45px;">
                                <div class="small text-uppercase" style="background: #990000;color: #FFF;">Sep</div>
                                <div class="font-size-xlg py-1" style="background: #FFF;color: #011F5B;">14</div>
                            </div>
                            <div class="position-absolute" style="bottom:0px;left: 0px;width: 85%;">
                                <div class="bg-white font-size-xlg pt-3">
                                    <u style="text-underline-position: under;text-decoration-style: double;">Talks</u>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <a class="h3" href="" target="_blank">60-Second Lectures</a>

                            <p class="mt-3">
                                Penn Arts &amp; Sciences brings back the 60-Second Lectures with a new twist: a comprehensive lecture featuring multiple speakers instead of weekly lectures.
                                Featured speakers include faculty staff members across various departments in Penn Arts &amp; Sciences.
                            </p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="text-center my-5">
                <a href="events.php" class="btn btn-lg btn-primary btn-first-theme font-size-lg px-3 custom_shadow">
                    See More Events
                    <!-- <i class="fas fa-angle-double-down ml-2"></i> -->
                </a>
            </div>
        </div>
    </section>
</body>

</html>