<?php
    require_once('php/connect.php');
    // echo $_GET['tag'];

    if(isset($_GET['tag'])) {
        $tag = $_GET['tag'];
    } else {
        $tag = 'all';
    }

    // short if
    // $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';

    // $sql = "SELECT * FROM `blog`";
    $sql = "SELECT * FROM `blog` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
    $result = $conn->query($sql);
    if(!$result) {
        header('Location: blog.php');
    }

    // echo print_r($result);
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
                    <a href="blog.php?tag=all" style="text-decoration: none !important;">
                        <button class="btn btn-primary <?php echo $tag == 'all' ? 'active' : '' ?>">ทั้งหมด</button>
                    <a href="blog.php?tag=html" style="text-decoration: none !important;">
                        <button class="btn btn-primary <?php echo $tag == 'html' ? 'active' : '' ?>">HTML</button>
                    </a>
                    <a href="blog.php?tag=css" style="text-decoration: none !important;">
                        <button class="btn btn-primary <?php echo $tag == 'css' ? 'active' : '' ?>">CSS</button>
                    </a>
                    <a href="blog.php?tag=javascript" style="text-decoration: none !important;">
                        <button class="btn btn-primary <?php echo $tag == 'javascript' ? 'active' : '' ?>">Javascript</button>
                    </a>
                    <a href="blog.php?tag=php" style="text-decoration: none !important;">
                        <button class="btn btn-primary <?php echo $tag == 'php' ? 'active' : '' ?>">PHP</button>
                    </a>
                    <a href="blog.php?tag=mysql" style="text-decoration: none !important;">
                        <button class="btn btn-primary <?php echo $tag == 'mysql' ? 'active' : '' ?>">MySQL</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                if($result->num_rows) {
                    while($row = $result->fetch_assoc()) {
            ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="wrapper-crad-img">
                        <img src="<?php echo $base_path_image.$row['image'] ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                        <p class="card-text"><?php echo $row['sub_title'] ?></p>
                    </div>
                    <div class="p-2">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-teal d-grid">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <?php
                    }
                } else {
            ?>
            <section class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        ไม่พบข้อมูล
                    </div>
                </div>
            </section>
            <?php
                }      
            ?>
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