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
    <header data-jarallax="{'speed':0.2}" class="page-title jarallax" style="background-image: url(images/joy6.jpg);">
        <div class="col-12 text-center">
            <h1>HTML คืออะไร?</h1>
            <p>ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล</p>
        </div>
    </header>
    <!-- End Page Title -->
    <!-- Section ToDo -->
    <section class="container blog-shadow">
        <div class="row">
            <div class="col-12">
                <h2><strong>ประวัติภาษา HTML</strong></h2>
                <p><strong>HTML</strong> (HyperText Markup Language) คือ ภาษาคอมพิวเตอร์ที่ออกแบบมาเพื่อใช้ใน การเขียนเว็บเพจ ถูกเรียกดูผ่านเว็บบราวเซอร์ เริ่มพัฒนาโดย ทิม เบอร์เนอรส์ ลี (Tim Berners Lee) ในปีค.ศ.1990 <strong>HTML</strong> เป็นมาตรฐานที่จัดการโดย World Wide Web Consortium แต่ปัจจุบัน W3C ผลักดัน XHTML ที่ใช้ XML มาทดแทน <strong>HTML</strong> รุ่น 4.01 <strong>HTML</strong> ย่อมาจากคำว่า &ldquo;HyperText Markup Language&rdquo; เป็นภาษาที่ใช้ในการเขียน โปรแกรมภาษาหนึ่งของคอมพิวเตอร์ ที่แสดงผลในลักษณะของเว็บเพจ ซึ่งสามารถแสดงผลได้ใน รูปแบบต่างๆ ไม่ว่าเป็นภาพกราฟิก ภาพนิ่ง ภาพเคลื่อนไหว เสียง หรือการเชื่อมโยงไปยังเว็บเพจอื่นๆ ภาษา <strong>HTML</strong> เป็นภาษาที่มีลักษณะของโค้ด กล่าวคือ จะเป็นไฟล์ที่เก็บข้อมูลที่เป็นตัวอักษร ในมาตรฐานของรหัสแอสกี (ASCII Code) โดยเขียนอยู่ในรูปแบบของเอกสารข้อความ จึงสามารถ กำหนดรูปแบบและโครงสร้างได้ง่าย</p>
                <p>ภาษา <strong>HTML</strong> (Hyper Text Markup Language) เป็นภาษาที่ใช้ในการเขียนโปรแกรมข้อมูล ที่ใช้แสดงผลบนเครือข่ายอินเตอร์เน็ตในลักษณะของข้อความ รูปภาพ เสียง และภาพเคลื่อนไหว ต่างๆ ภาษา <strong>HTML</strong> เป็นภาษาที่ง่ายต่อการเรียนรู้สามารถกำหนดรูปแบบและโครงสร้างได้ง่าย ทำให้ ได้รับความนิยม และมีการพัฒนาอย่างต่อเนื่องเพื่อให้ใช้งานง่ายขึ้น และตอบสนองต่องานด้านกราฟิก มากยิ่งขึ้น และสนับสนุนการแสดงผลในเว็บบราวเซอร์มากมาย และบันทึกในรูปของไฟล์นามสกุล htm หรือ html บทเรียนในการศึกษาภาษา <strong>HTML</strong> ต่อไปนี้ มีความประสงค์จะให้ผู้เรียนได้ฝึกฝนและทำความเข้าใจในการเขียนโค๊ดคำสั่งด้วยตนเอง จึงมีความจำเป็นจะต้องใช้เครื่องมือพื้นฐานที่มีอยู่แล้วให้ เป็นประโยชน์มากที่สุด โดยไม่ต้องลงทุนอะไรมากมาย เมื่อทำความเข้าใจและเขียนโค๊ดได้ถูกต้อง แม่นยำค่อยหาเครื่องมือมาช่วยอำนวยความสะดวกอีกที</p>
                <h2><strong>ความรู้เบื้องต้นภาษา HTML</strong></h2>
                <p><strong>HTML</strong> ย่อมาจาก Hypertext Markup Language เป็นภาษาคอมพิวเตอร์รูปแบบหนึ่ง ที่มีโครงสร้างการเขียนโดยอาศัยตัวกำกับ (Tag) ควบคุมการแสดงผลข้อความ รูปภาพ หรือวัตถุ อื่นๆ ผ่านโปรแกรมเบราเซอร์ แต่ละ Tag อาจจะมีส่วนขยาย เรียกว่า Attribute สำหรับระบุ หรือควบคุมการแสดงผล ของเว็บได้ด้วย <strong>HTML</strong> เป็นภาษาที่ถูกพัฒนาโดย World Wide Web Consortium (W3C) จากแม่แบบของภาษา SGML (Standard Generalized Markup Language)โดยตัดความสามารถบางส่วนออกไป เพื่อให้สามารถทำความเข้าใจและเรียนรู้ได้ง่าย และด้วยประเด็นดังกล่าว ทำให้บริการ www เติบโตขยายตัวอย่างกว้างขวาง</p>
                <p>Tag เป็นลักษณะเฉพาะของภาษา <strong>HTML</strong> ใช้ในการระบุรูปแบบคำสั่ง หรือการลงรหัสคำสั่ง <strong>HTML</strong> ภายในเครื่องหมาย less-than bracket (&lt;) และ greater-than bracket (&gt;) โดยที่ Tag <strong>HTML</strong> แบ่งได้ 2 ลักษณะ คือ</p>
                <ol>
                    <li style="margin-left: 40px;">tag เดี่ยว คือ รูปแบบคำสั่งที่มีเพียงคำสั่งเดียวหรือมีเพียงแท็กเดียว ก็สามารถใช้งานได้เช่น</li>
                    <li style="margin-left: 40px;">tag คู่ คือ รูปแบบคำสั่งที่เป็นสองส่วน คือ มีส่วนเริ่มต้นและต้องมีส่วนจบของคำสั่งถึงจะสามารถทำงานได้ สมบูรณ์โดยส่วนจบของแต่ละคำสั่งจะมีเครื่องหมาย Slash (/) ไว้หน้าแท็กคำสั่งนั้น</li>
                </ol>
                <h3 style="margin-left:40px"><strong>ลักษณะของแท็กคำสั่ง</strong></h3>
                <ol style="margin-left:40px">
                    <li>รูปแบบแท็กจะแยกเป็น 2 ส่วน โดยจะต้องมีส่วนเริ่มต้นเรียกว่า&nbsp;&ldquo;แท็กเปิด&rdquo; และส่วนจบของแท็ก เรียกว่า&nbsp;&ldquo;แท็กเปิด&rdquo;&nbsp;โดยแท็กปิด จะมีเครื่องหมาย slash ( / ) นำหน้าคำสั่งใน Tag นั้น ๆ เช่น &lt;B&gt;&hellip;&hellip;&lt;/B&gt; (Tag กำหนดตัวหนา), &lt;a href=URL&gt;&hellip;จุด link..&lt;/a&gt; (Tag กำหนดการเชื่อมโยงข้อมูล) เป็นต้น</li>
                    <li>บางแท็กอาจไม่ต้องมีแท็กปิดก็สามารถใช้งานได้ เรียกว่า &ldquo;แท็กเดี่ยว&rdquo; เช่น &lt;hr&gt;(Tag กำหนดเส้นคั่น), &lt;br&gt; (Tag กำหนดขึ้นบันทัดใหม่) เป็นต้น</li>
                    <li>คำสั่งในแท้กเขียนด้วยอักษรตัวใหญ่หรือเล็กก็ได้ เช่น &lt;Body&gt; หรือ &lt;BODY&gt; หรือ&lt;body&gt;</li>
                    <li>บาง Tag มีตัวจะมีตัวกำหนดคุณสมบัติ &nbsp;เรียกว่า แอททริบิวท์ (Attribute) และค่าที่ถูกกำหนดของแอททริบิวท์ เรียกว่า Value เช่น &lt;hr width=600&gt; แท็ก hr มีแอททริบิว คือ width แวลู เท่ากับ 600</li>
                </ol>

            </div>
            <div class="col-12">
                <hr>
                <p class="text-end text-muted">28 พฤษภาคม 2564</p>
                <p class="text-end text-muted">kruorawan.wordpress.com/html-ม-3/ความหมายและความสำคัญขอ/</p>
            </div>
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
            <div class="col-12">
                <div class="fb-comments" data-href="https://8luex.github.io/bluzo_demo/blog-detail.php" data-width="100%" data-numposts="5"></div>
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