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
                    <h1>เกี่ยวกับเรา</h1>
                    <p>“Do or do not; there is no try.” – Yoda</p>
                </div>
            </div>
        </div>
    </header> -->
    <header data-jarallax="{'speed':0.2}" class="jarallax" style="background-image: url(images/joy9.jpg);">
        <div class="blog-image">
            <div class="col-12 text-center">
                <h1>เกี่ยวกับเรา</h1>
                <p>“Do or do not; there is no try.” – Yoda</p>
            </div>
        </div>
    </header>
    <!-- End Page Title -->
    <!-- Section ToDo -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="ratio ratio-16x9">
                    <iframe allowfullscreen="" frameborder="0" width="85%" src="//www.youtube.com/embed/taaT4pC-jnc?rel=0&amp;autoplay=1&amp;loop=1&amp;"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni harum blanditiis esse vero debitis quae consequatur repudiandae aliquid nesciunt facere dolorum at, vel soluta eligendi exercitationem ab odit ipsum. Error.</p>
                <br>
                <h3>ไม่รู้จะเขียนอะไรจ้า</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse mollitia laborum sed? Doloremque, provident officia ipsam non, sed impedit voluptates necessitatibus quas aliquam, aut corrupti officiis at corporis. Nobis, possimus?</p>
                <br>
                <h3>อ้อ จะบอกว่า...</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi eaque assumenda sed amet minima porro nobis ea non tempore reiciendis possimus ipsa, nisi temporibus, quaerat saepe perferendis dolor nesciunt?</p>
            </div>
        </div>
    </section>
    <!-- ---------------- -->
    <section data-jarallax="{'speed':0.2}" class="position-relative py-5 jarallax" style="background-image: url(images/joy2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="images/StardewValleyIcon.png" alt="" class="img-fluid" width="150" height="150">
                    <h1 style="color: white;">Timeline About me</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------- -->
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p>17 October 2001</p>
                        </div>
                        <div class="timeline-card">
                            <h5>วันเกิดของเรา</h5>
                            <p class="text-muted">วันพุธ ที่ 17 ตุลาคม 2544</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>XX - 2005</p>
                        </div>
                        <div class="timeline-card">
                            <h5>เข้าเรียน Wanthamaria School</h5>
                            <p class="text-muted">เรียนตั้งแต่อนุบาล - มัธยมปลาย</p>
                            <p class="text-muted">(สายวิทย์-คณิต)</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p>9 June 2020</p>
                        </div>
                        <div class="timeline-card">
                            <h5>เข้าเรียน Rangsit University</h5>
                            <p class="text-muted">Computer science</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>Present</p>
                        </div>
                        <div class="timeline-card">
                            <h5>ปัจจุบันมีชีวิตอยู่</h5>
                            <p class="text-muted">กำลังเรียนจ้า</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fa fa-angle-down" style="font-size:36px"></i>
                    </li>
                </ul>
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