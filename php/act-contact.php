<?php
    require_once('connect.php');
    // echo '<pre>', print_r($_POST), '</pre>';

    if(isset($_POST['btn-submit'])) {
        $secretKey = '6Lcfc_YaAAAAAJJcJ-HWzoLva4fYNqVlpcHKH5Mh';
        $response = $_POST['g-recaptcha-response'];
        $remoteIP = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIP";
        $resp = json_decode(file_get_contents($url));
        
        if($resp->success) {
            $sql = "INSERT INTO `contacts` (`created_at`, `name`, `phone`, `email`, `detail`) 
                    VALUES ('".date("Y-m-d")."', 
                    '".$_POST['name']."', 
                    '".$_POST['phone']."', 
                    '".$_POST['email']."', 
                    '".$_POST['message']."')";
            $result = $conn->query($sql) or die($conn->error);
            if($result) {
                sendToLine();
            }
        } else {
            echo '<script> alert("Verification Recaptcha Failed!!!")</script>';
            header('Refresh:0; url=../contact.php');
        }
    } else {
        header('Refresh:0; url=../home.php');
    }

    function sendToLine() {
        $text = "มีผู้ติดต่อมาจาก WebBlog\n";
        $text .= "Name: ".$_POST['name'] ."\n";
        $text .= "Phone: ".$_POST['phone']."\n"; 
        $text .= "Email: ".$_POST['email']."\n";
        $text .= $_POST['message']; 
        $message = array(
            'message' => $text
        );
        notify_message($message);
    }

    function notify_message($message) {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"TxclwvF31jrzRmoRvpIt2vUmLuPGNJYUozu5FPiZ2hH");
        $queryData = http_build_query($message, '', '&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content'=> $queryData
            )
        );

        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $resp = json_decode($result);
        if($resp->status == 200) {
            echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว")</script>'; 
            header('Refresh:0; url=../home.php');
        } else {
            echo '<script> alert("ส่งข้อมูลไม่สำเร็จ โปรดติดต่อ.....")</script>'; 
            header('Refresh:0; url=../home.php');
        }
    }
?>