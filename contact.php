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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <!-- <header data-jarallax="{'speed':0.2}" class="page-title jarallax" style="background-image: url(images/joy7.jpg);">
        <div class="col-12 text-center">
            <h1>ข้อมูลการติดต่อ</h1>
            <p>Ramida Wisutwattanasak</p>
        </div>
    </header> -->
    <header data-jarallax="{'speed':0.2}" class="jarallax" style="background-image: url(images/joy7.jpg);">
        <div class="blog-image">
            <div class="col-12 text-center">
                <h1>ข้อมูลการติดต่อ</h1>
                <p>Ramida Wisutwattanasak</p>
            </div>
        </div>
    </header>
    <!-- End Page Title -->
    <!-- Section ToDo -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card fa-3x py-2 text-info"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">98/76 Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, perferendis!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square fa-3x py-2 text-info"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p class="card-text">(+66)98-195-4166</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope fa-3x py-2 text-info"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p class="card-text">ramida470@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">แบบฟอร์มติดต่อเรา</h5>
                        <form method="post" action="php/act-contact.php" class="row">
                            <div class="mb-3 col-md-4">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="ชื่อของคุณ">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" name="phone" required placeholder="เบอร์โทรศัพท์ของคุณ">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="email" class="form-label">อีเมลล์</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="example@email.com" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text" style="font-size: 10px;">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">ข้อความของคุณ</label>
                                <textarea class="form-control" id="message" name="message" required rows="5" placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                            </div>
                            <div class="col-12">
                                <div id="recaptcha-wrapper" class="text-center my-2">
                                    <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6Lcfc_YaAAAAAHz0Xca3_H8AyDwJJF_erHTAsA5e"></div>
                                </div>
                                <button type="submit" name="btn-submit" id="btn-submit" class="btn btn-primary d-block mx-auto" disabled>ส่งข้อความ</button>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="to-top.js"></script>
    <script>
        $(function(){
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();
        });

        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }
        // resizeCaptcha();
        function recaptchaCallback() {
            $('#btn-submit').removeAttr('disabled');
        }
    </script>
</body>
</html>