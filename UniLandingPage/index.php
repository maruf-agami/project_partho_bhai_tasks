<!DOCTYPE html>
<html lang="en">

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
        $(`title`).text("University of Pennsylvania");
    </script>



    <title>University of Pennsylvania</title>
</head>

<body>
    <div id="nav_container_div" class="position-absolute w-100 bg-light">
        <?php include_once dirname(__FILE__) . "/navigation.php"; ?>
    </div>
    <div id="home-top-div">
        <div class="row">
            <div class="col-6 p-0"></div>
            <div class="col-6 p-0" style="margin-top:150px">
                <h5 class="text-light">CAMPUS & COMMUNITY</h5>
                <h2 class="text-light">A decade of advancing working dogs for <br> the greater good
                </h2>
                <p class="text-light">
                    Inspired by her experience caring for working dogs following 9/11 at Ground
                    Zero, Penn Vet
                    Working Dog Center Director Cynthia Otto’s initial vision has grown into a
                    thriving
                    organization with a mission to use science to improve the breeding, training,
                    care, and
                    effectiveness of working dogs.</p>
            </div>
        </div>
    </div>
    <!-- <div id="news_container_div">
        <?php include_once dirname(__FILE__) . "/news.php"; ?>
    </div> -->
    <div id="">
        <?php include_once dirname(__FILE__) . "/pennPriorities.php"; ?>
    </div>

    <section id="stay_connected">
        <?php include_once dirname(__FILE__) . "/stayConnected.php"; ?>
    </section>
    <div>
        <?php include_once dirname(__FILE__) . "/ppp.php"; ?>
    </div>
    <div>
        <?php include_once dirname(__FILE__) . "/pennOpportunity.php"; ?>
    </div>
    <div>
        <?php include_once dirname(__FILE__) . "/footer.php"; ?>
    </div>

</body>

</html>