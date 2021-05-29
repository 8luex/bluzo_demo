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
    <!-- <header data-jarallax="{'speed':0.2}" class="page-title jarallax" style="background-image: url(images/joy9.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>บทความ</h1>
                    <p>“สังคมแห่งการเขียนเว็บไซต์”</p>
                </div>
            </div>
        </div>
    </header> -->
    <header data-jarallax="{'speed':0.2}" class="jarallax" style="background-image: url(images/joy10.jpg);">
        <div class="blog-image">
            <div class="col-12 text-center">
                <h1>บทความ</h1>
                <p>“สังคมแห่งการเขียนเว็บไซต์”</p>
            </div>
        </div>
    </header>
    <!-- End Page Title -->
    <!-- Section ToDo -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <button class="btn btn-primary">ทั้งหมด</button>
                    <button class="btn btn-primary">HTML</button>
                    <button class="btn btn-primary">CSS</button>
                    <button class="btn btn-primary">Javascript</button>
                    <button class="btn btn-primary">PHP</button>
                    <button class="btn btn-primary">MySQL</button>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=001" class="wrapper-crad-img">
                        <img src="images/joy6.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">HTML คืออะไร?</h5>
                        <p class="card-text">ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล</p>
                    </div>
                    <div class="p-2">
                        <a href="blog-detail.php?id=001" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="wrapper-crad-img">
                        <img src="images/E14iO1ZUYAQV82b.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, voluptatem!</p>
                    </div>
                    <div class="p-2">
                        <a href="#" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="wrapper-crad-img">
                        <img src="images/E1QpGV3VcAUoYES.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-2">
                        <a href="#" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="wrapper-crad-img">
                        <img src="images/E1vZXlzVcAg4MMp.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, id.</p>
                    </div>
                    <div class="p-2">
                        <a href="#" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="wrapper-crad-img">
                        <img src="images/E14iPzkVIAIPMNh.jpg" class="card-img-top" alt="...">
                    </a>  
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem, ipsum dolor.</p>
                    </div>
                    <div class="p-2">
                        <a href="#" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="wrapper-crad-img">
                        <img src="images/E14Sf_eVUAUnOKd.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="p-2">
                        <a href="#" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
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