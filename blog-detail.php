<?php
    require_once('php/connect.php');
    $sql = "SELECT * FROM `blog` WHERE id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // echo "ไม่มีข้อมูล";
        header('Location: blog.php');
    }

    $sql_RAND = "SELECT * FROM `blog` WHERE `status` = 'true' ORDER BY RAND() LIMIT 3";
    $result_RAND = $conn->query($sql_RAND);
    // echo '<pre>', print_r($row_RAND), '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Bluezo Course</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Ctrl+/ -->
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
    <!-- End Section Navbar -->
    <!-- Page Title (Alternate: Background Image Parallax) -->
    <header data-jarallax="{'speed':0.2}" class="page-title jarallax" style="background-image: url(<?php echo $base_path_image.$row['image'] ?>);">
        <div class="col-12 text-center">
            <h1><?php echo $row['subject'] ?></h1>
            <p><?php echo $row['sub_title'] ?></p>
        </div>
    </header>
    <!-- End Page Title -->
    <!-- Section ToDo -->
    <section class="container blog-shadow">
        <div class="row">
            <div class="col-12">
                <?php echo $row['detail'] ?>
            </div>
            <div class="col-12">
                <hr>
                <p class="text-end text-muted"><?php echo date_format(new DateTime($row['updated_at']),"j F Y") ?></p>
                <p class="text-end text-muted"><?php echo $row['refer'] ?></p>
            </div>
            <!-- card -->
            <?php while($row_RAND = $result_RAND->fetch_assoc()) { ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row_RAND['id'] ?>" class="wrapper-crad-img">
                        <img src="<?php echo $base_path_image.$row_RAND['image'] ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row_RAND['subject'] ?></h5>
                        <p class="card-text"><?php echo $row_RAND['sub_title'] ?></p>
                    </div>
                    <div class="p-2">
                        <a href="blog-detail.php?id=<?php echo $row_RAND['id'] ?>" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <?php } ?>
            <div class="col-12">
                <div class="fb-comments" data-href="https://bluezo.000webhostapp.com/blog-detail.php?id=<?php echo $row['id'] ?>" data-width="100%" data-numposts="5"></div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v10.0" nonce="1wAC3THO"></script>
            </div>
        </div>
    </section>
    <!-- Rate Me---------------- -->
    <?php include_once('includes/rate-me.php') ?>
    <!-- End Section To Do  -->
    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>
    <!-- End Footer -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-angle-up"></i>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Jarallax -->
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    <script src="to-top.js"></script>
</body>
</html>