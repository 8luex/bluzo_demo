<?php
    $file_name = basename($_SERVER['SCRIPT_FILENAME'],'.php');
?>
<!-- Section Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-alpha">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="images/StardewValleyIcon.png" alt="" width="40" height=40">
        </a>
        <a class="navbar-brand" href="home.php">BLUEZO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ms-auto text-center">
                <!-- ml-auto => ms-auto (start), mr-auto => me-auto (end) -->
                <a class="nav-link<?php echo $file_name == 'home' ? ' active" aria-current="page"': '"' ?> href="home.php">Home</a>
                <a class="nav-link<?php echo $file_name == 'about' ? ' active" aria-current="page"': '"' ?> href="about.php">About</a>
                <a class="nav-link<?php echo $file_name == 'blog'||$file_name == 'blog-detail' ? ' active" aria-current="page"': '"' ?> href="blog.php">Blog</a>
                <a class="nav-link<?php echo $file_name == 'contact' ? ' active" aria-current="page"': '"' ?> href="contact.php">Contact</a>
            </ul>
        </div>
    </div>
</nav>
<!-- End Section Navbar -->