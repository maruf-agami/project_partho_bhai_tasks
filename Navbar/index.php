<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- castom css -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, FA CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b9e84834a9.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <title>Hello, world!</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-sm navbar-style">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link h3" href="#">
                            <i class="fa-brands fa-twitter fa-sm"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link h3" href="#">
                            <i class="fa-brands fa-facebook-f fa-sm"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link h3" href="#">
                            <i class="fa-brands fa-instagram fa-sm"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link h3" href="#">
                            <i class="fa-brands fa-linkedin-in fa-sm"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link h3" href="#">
                            <i class="fa-brands fa-youtube fa-sm"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            Tooltip on top
        </button> -->
        <!-- <nav class="navbar"></nav> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark main-nav">
            <div class="container">
                <a class="logo" href="#">
                    <img src="Assets/DOD-Icon-Header.png" alt="" height="30px" width="80px">
                    U.S Department of Defense
                </a>
                <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#myModal" aria-controls="myModal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-md-none" id="">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-3" href="#" id="news-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-3" href="#" id="spotlightDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Spotlights
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-3" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <div id="myModal" class="modal fade right">
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
                            <a class="nav-link" href="#" id="home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="nav-link" href="#" id="news-dropdown-pn" role="button" data-toggle="modal" data-target="#news-menu-pn" aria-haspopup="true" aria-expanded="false">
                                News
                            </a>
                            <span>
                                <i class="fa-solid fa-greater-than fa-xl"></i>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="nav-link" href="#" id="spot-dropdown-pn" role="button" data-toggle="modal" data-target="#spot-menu-pn" aria-haspopup="true" aria-expanded="false">
                                Spotlights
                            </a>
                            <span>
                                <i class="fa-solid fa-greater-than fa-xl"></i>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="nav-link" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <span>
                                <i class="fa-solid fa-greater-than fa-xl"></i>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="nav-link" href="#" id="legalDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Legal & Administrative
                            </a>
                            <span>
                                <i class="fa-solid fa-greater-than fa-xl"></i>
                            </span>
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


    <div id="spot-menu-pn" class="modal fade right">
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent12" aria-controls="navbarSupportedContent12" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent12">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown12" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown12">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <script src="index.js"></script>
</body>

</html>