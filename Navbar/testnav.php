<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="testnav.css">
    <title>Hello, world!</title>
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#myModal2">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="container demo">
            <div class="text-center">
                <!-- <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
                    Right Sidebar Modal
                </button> -->
            </div>


            <!-- Modal -->
            <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
                        </div>

                        <div class="modal-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div><!-- modal-content -->
                </div><!-- modal-dialog -->
            </div><!-- modal -->
        </div><!-- container -->


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="newsDropdownButton">
                    <a class="nav-link dropdown-toggle p-3" href="#" role="button">
                        News
                    </a>
                    <div class="d-none" id="newsDropdownMenu">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>PRESS PRODUCTS</h5>
                                <a class="dropdown-item p-0" href="#">Today in DOD</a>
                                <a class="dropdown-item p-0" href="#">Live Events</a>
                                <a class="dropdown-item p-0" href="#">Releases</a>
                                <a class="dropdown-item p-0" href="#">Advisories</a>
                                <a class="dropdown-item p-0" href="#">Transcripts</a>
                                <a class="dropdown-item p-0" href="#">Speeches</a>
                                <a class="dropdown-item p-0" href="#">Publications</a>
                                <a class="dropdown-item p-0" href="#">Contracts</a>

                            </div>
                            <div>
                                <h5>NEWSROOM</h5>
                                <a class="dropdown-item p-0" href="#">News Stories</a>
                                <a class="dropdown-item p-0" href="#">Feature Stories</a>
                                <a class="dropdown-item p-0" href="#">Stories from the Services</a>
                            </div>
                            <div>
                                <h5>MULTIMEDIA</h5>
                                <a class="dropdown-item p-0" href="#">Photos</a>
                                <a class="dropdown-item p-0" href="#">Videos</a>
                                <a class="dropdown-item p-0" href="#">Interactive Experiences</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="spotlightDropdownButton">
                    <a class="nav-link dropdown-toggle p-3" href="#" role="button">
                        Spotlights
                    </a>
                    <div class="d-none" id="spotlightDropdownMenu">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>TRENDING ISSUES</h5>
                                <a class="dropdown-item p-0" href="#">NATO</a>
                                <a class="dropdown-item p-0" href="#">FY 2023 Defense Budget</a>
                                <a class="dropdown-item p-0" href="#">Support for Ukrains</a>
                                <a class="dropdown-item p-0" href="#">Military Family Support</a>

                            </div>
                            <div>
                                <h5>TOPICS</h5>
                                <a class="dropdown-item p-0" href="#">Science & Technology</a>
                                <a class="dropdown-item p-0" href="#">Coronavirus</a>
                                <a class="dropdown-item p-0" href="#">Face of Defense</a>
                                <a class="dropdown-item p-0" href="#">All Spotlights</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="aboutDropdownButton">
                    <a class="nav-link dropdown-toggle p-3" href="#" role="button">
                        About
                    </a>
                    <div class="d-none" id="aboutDropdownMenu">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>LEADERSHIP</h5>
                                <a class="dropdown-item p-0" href="#">Secretary of Defense</a>
                                <a class="dropdown-item p-0" href="#">Deputy Secretary of Defense</a>
                                <a class="dropdown-item p-0" href="#">Chairman of the Joint Chiefs of Staff</a>
                                <a class="dropdown-item p-0" href="#">Vice Chairman of the Joint Chiefs of Staff</a>
                                <a class="dropdown-item p-0" href="#">Office of t he Secretary of Defense</a>
                                <a class="dropdown-item p-0" href="#">More Leaders</a>

                            </div>
                            <div>
                                <h5>COMPONENTS</h5>
                                <a class="dropdown-item p-0" href="#">Army</a>
                                <a class="dropdown-item p-0" href="#">Marine Corps</a>
                                <a class="dropdown-item p-0" href="#">Navy</a>
                                <a class="dropdown-item p-0" href="#">Air Force</a>
                                <a class="dropdown-item p-0" href="#">Space Force</a>
                                <a class="dropdown-item p-0" href="#">Coast Guard</a>
                                <a class="dropdown-item p-0" href="#">National Guard</a>
                                <a class="dropdown-item p-0" href="#">Combatant Commands</a>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>
        </div>
    </nav>
    <div id="news-menu-pn" class="modal fade right">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <form class="d-flex justify-content-center align-items-center">
                        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                        <span>
                            <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
                        </span>
                    </form>
                    <button type="button" class="close" data-dismiss="modal"><i class="fa-solid fa-xmark fa-2xl"></i></button>

                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5>Press Products</h5>
                            <a class="nav-link" href="#" role="button">Today in DOD</a>
                            <a class="nav-link" href="#" role="button">Live Events</a>
                            <a class="nav-link" href="#" role="button">Releases</a>
                            <a class="nav-link" href="#" role="button">Advisories</a>
                            <a class="nav-link" href="#" role="button">Transcripts</a>
                            <a class="nav-link" href="#" role="button">Speeches</a>
                            <a class="nav-link" href="#" role="button">Publications</a>
                            <a class="nav-link" href="#" role="button">Contracts</a>
                        </li>
                        <li class="list-group-item">
                            <h5>Newsroom</h5>
                            <a class="nav-link" href="#" role="button">News Stories</a>
                            <a class="nav-link" href="#" role="button">Feature Stories</a>
                            <a class="nav-link" href="#" role="button">Stories from the Services</a>
                        </li>
                        <li class="list-group-item">
                            <h5>Multimedia</h5>
                            <a class="nav-link" href="#" role="button">Photos</a>
                            <a class="nav-link" href="#" role="button">Videos</a>
                            <a class="nav-link" href="#" role="button">Interactive Experiences</a>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between px-3">
                                <a class="nav-link h3" href="#">
                                    <i class="fa-brands fa-twitter fa-sm"></i>
                                </a>
                                <a class="nav-link h3" href="#">
                                    <i class="fa-brands fa-facebook-f fa-sm"></i>
                                </a>
                                <a class="nav-link h3" href="#">
                                    <i class="fa-brands fa-instagram fa-sm"></i>
                                </a>
                                <a class="nav-link h3" href="#">
                                    <i class="fa-brands fa-linkedin-in fa-sm"></i>
                                </a>
                                <a class="nav-link h3" href="#">
                                    <i class="fa-brands fa-youtube fa-sm"></i>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script src="testnav.js"></script>
</body>

</html>