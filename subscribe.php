<?php 

    require_once "app/include/database.php";
    require_once "app/include/function.php";


    if(isset($_POST['email'])) {

        $email = trim($_POST['email']);
        
        $insert_result = insert_subscriber($email);

        $header = "Location: /?subscribe=";
        $header .=$insert_result;

        header($header);

        //это же действия можно сделать сложнее - код ниже (оставил его для наглядности)


        // switch ($insert_result) {
        //     case "fail":
        //         header("Location: /?subscribe=fail");
        //         break;
        //     case "exist":
        //         header("Location: /?subscribe=exist");
        //         break;
        //     case "created":
        //         header("Location: /?subscribe=created");
        //         break;
        // }

    } else {
        header("Location: /"); 
    }   
    



?>
