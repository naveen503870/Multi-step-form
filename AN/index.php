<?php
ob_start();
// if (isset($_COOKIE['step'])) {
//     $arr = [
//         '1' => "/second.php",
//         '2' => '/third.php'
//     ];
//     if (array_key_exists($_COOKIE['step'], $arr)) {
//         header('Location: ' . $arr[$_COOKIE['step']]);
//         exit();
//     }
// } else {
//     header('Location: /index.php');
//     exit();
// }
// echo FILTER_VALIDATE_EMAIL;


// if(filter_var('shanuraj@gmail.com', 274)){
//     echo "This is an email id";
// }
// else{
//     echo "This is not an email id";
// }

// exit();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <style>
        .fourth-form {
            display: flex;
            justify-content: center;
            margin-top: 29px;
            /* background-color: aliceblue; */
            padding: 15px;
        }

        label {
            font-size: 25px;
            font-weight: bold;
        }

        .input-class {
            width: 20px;
            height: 16px;

        }
    </style>

</head>

<body>
    <?php include './components/headerBtns.php'; ?>
    <!-- /////////////////////////////////////////////////////////////////// -->
    <!-- <form class="fourth-form">
        <div>
            <input type="radio" name="selection" id="yesbtn" value="check1" class="input-class">
            <label>Yes</label>

            <input type="radio" name="selection" id="nobtn" value="check2" class="input-class">
            <label>No</label>
        </div>
    </form> -->
    <!-- /////////////////////////////////////////////////////////////////// -->

    <div class="container">
        <div class="title">Registration</div>
        <form action="#" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="name" value="johny" id="name">
                </div>
                <div class="input-box">
                    <span class="details">Email ID</span>
                    <input type="text" placeholder="Email ID" name="email" id="email">
                </div>
                <div class="input-box">
                    <span class="details">Mobile no</span>
                    <input type="text" placeholder="Mobile no" name="mobile" id="mobile">
                </div>
                <div class="input-box">
                    <span class="details">course</span>
                    <input type="text" placeholder="course" name="course" id="course">
                </div>
            </div>
            <div class="button">
                <input type="submit" value="submit" name="submit">

            </div>

            <!-- UPDATE student (a, b, c, d, e, f) VALUES(5, 6, 7, $d) -->


        </form>
    </div>



</body>
    <script type="text/javascript" src="./js/script.js" defer></script>
</html>
<?php
include 'db.php';
// $randNumber= rand(111, 999);
// $userid = rand(111, 999);
$userid = date('Ymdhis');


// $userid =  date('Ymdhis');


// $userid = 'userid';
// echo $randNumber;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $course = $_POST['course'];
    // $userid = $_POST['userid'];

    $insertquery = " insert into first_page(
        `userid`,`name`,`email`,`mobile`,`course`)
        values('$userid','$name', '$email', '$mobile', '$course')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
        setcookie('userid', $userid);
        setcookie('step', 1);
        header("Location: /plant.php");
?>
        <script>
            alert("data inserted")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("data not inserted")
        </script>
<?php

    }
}





?>