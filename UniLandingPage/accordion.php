<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src=""></script>

    <style>
        body,
        .tab-items {
            background-color: #F2F2F2;
        }

        .tab-ul {
            display: flex;
            justify-content: center;
        }

        .accordion-wrapper {
            max-width: 1200px;
            height: 100vh;

        }

        .nav-tabs {
            display: none;
        }

        .blue-font {
            color: #011F5B;
        }

        .split-content__column>h3 {
            font-weight: 400;
        }

        .split-content__column>p {
            line-height: 30px;
        }

        .text-align-center {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .text-align-center a {
            border: 1px solid rgba(118, 118, 118, 0.2);
            color: #011F5B;
            border-radius: 30px;
            padding: 15px 50px;
            font-weight: bold;
            font-size: 12px;
        }

        .text-align-center a:hover {
            background-color: #011F5B;
            color: white;
        }

        @media(min-width:768px) {
            .nav-tabs {
                display: flex;
            }

            .card {
                border: none;
            }

            .card .card-header {
                display: none;
            }

            .card .collapse {
                display: block;
            }
        }

        @media(max-width:767px) {
            .tab-content>.tab-pane {
                display: block !important;
                opacity: 1;
            }
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="accordion-wrapper mx-auto d-flex flex-column align-items-center">
        <ul id="tabs" class="nav nav-tabs tab-ul" role="tablist">
            <li class="nav-item">
                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Penn Global</a>
            </li>
            <li class="nav-item">
                <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Other Strategic Initiatives</a>
            </li>
        </ul>


        <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                <div class="card-header" role="tab" id="heading-A">
                    <h5 class="mb-0">
                        <!-- Note: `data-parent` removed from here -->
                        <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                            Penn Global
                        </a>
                    </h5>
                </div>

                <!-- Note: New place of `data-parent` -->
                <div id="collapse-A" class="collapse show tab-items  border-top" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                    <div class="card-body">
                        <div class="split-content wysiwyg">
                            <div class="contain  row">
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <div class="col-lg-11">
                                        <div class="split-content__column">
                                            <figure><img loading="lazy" src="Assets/penn-global.jpg" width="100%" height="auto" alt="penn students on camels" typeof="foaf:Image"></figure>
                                            <p>Penn faculty and students share a passion for engaging with communities around the world, and Penn Global provides innumerable opportunities for them to pair passion and knowledge in ways that both enrich their academic careers and positively impact diverse people and populations all over the globe.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <div class="col-lg-11 mt-3">
                                        <div class="split-content__column">
                                            <h3 class="blue-font">Global Campus</h3>

                                            <p>Penn is a leading institution for the range of countries represented, and cultures supported, on campus.</p>

                                            <h3 class="blue-font">Global Opportunities</h3>

                                            <p>Whether through study abroad, service learning, or innovative travel initiatives, international experience is an indispensable part of Penn.</p>

                                            <h3 class="blue-font">Global Impact</h3>

                                            <p>Penn’s faculty, students, and alumni use their cutting-edge research, broad expertise, and University resources to effect positive change in peoples’ lives around the world.</p>

                                            <p class="text-align-center"><a class="btn btn-outline-light" href="https://global.upenn.edu/">PENN GLOBAL</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                <div class="card-header" role="tab" id="heading-B">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                            Other Strategic Initiatives
                        </a>
                    </h5>
                </div>
                <div id="collapse-B" class="collapse tab-items border-top" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                    <div class="card-body">
                        <div class="split-content wysiwyg">
                            <div class="contain  row">
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <div class="col-lg-11">
                                        <div class="split-content__column">
                                            <figure class="align-left"><img loading="lazy" src="Assets/other-stratedic-initiatives.jpg" width="100%" height="auto" alt="college hall with fall leaves" typeof="foaf:Image"></figure>
                                            <p class="featured">Penn has established a number of key initiatives in robust support of student and faculty work that advances the mission of the University: work that bridges the divide between knowledge and action, dismantles academic silos that impede innovation, or breaks down the economic barriers that obstruct educational equality and excellence.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <div class="col-lg-11 mt-3">
                                        <div class="split-content__column">
                                            <h4><a href="https://pikprofessors.upenn.edu/">Penn Integrates Knowledge Professorships</a></h4>

                                            <p>The Penn Integrates Knowledge program attracts leading professors whose discipline-crossing work creates natural bridges among the University’s 12 schools, enriching student experiences and furthering Penn’s mission to integrate knowledge in service to society.</p>

                                            <h4><a href="https://srfs.upenn.edu/financial-aid/grants-and-scholarships">All-grant Financial Aid</a></h4>

                                            <p>Penn’s all-grant financial aid policy significantly reduces the burden of debt and, together with its need-blind admissions policy, ensures that a Penn education is accessible to outstanding students from all backgrounds.</p>

                                            <h4><a href="https://pennpep.upenn.edu/">President's Engagement Prizes</a></h4>

                                            <p>Penn seniors compete annually for prizes that fully fund local, national, and global engagement projects during the recipient’s first post-graduation year. This robust funding enables Penn’s youngest alumni to use their knowledge to serve others in profound and impactful ways.</p>

                                            <h4><a href="https://pennpip.upenn.edu/">President's Innovation Prizes</a></h4>

                                            <p>Awarded annually to a graduating Penn senior or team of seniors, the President’s Innovation Prize provides our students a unique path to be inventive and to think broadly about cutting-edge commercial projects that also have social impact.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>