<?php
ob_start();
if (!isset($_COOKIE['userid'])) {
    header('Location: /index.php');
    exit();
}

// if (isset($_POST['submit'])) {
//     print_r($_POST);
//     exit();
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* /////////////////////////////////////////////checkbox /////////////////////////////////////////////// */
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


        /* /////////////////////////////////////////////////table////////////////////////////////////////////////////// */
        .container {
            width: 40%;
            margin: auto;
            /* background-color: #4f81bd; */
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            background-color: #e9edf4;
            border: 2px solid white;
            text-align: left;
            padding-left: 2px;
            text-align: right;
            width: 50%;
        }



        .table-class {
            width: 95%;
            padding: 6px;
            background-color: #e9edf4;
            border-color: #e9edf4;
            border-top: #e9edf4;
            border-left: #e9edf4;
            border: 10px;
        }

        /* //////////////////////////////////////////footer button///////////////////////////////////////// */

        .footer-container {
            display: flex;
            /* border: 4px solid grey; */
            justify-content: space-between;
            border-radius: 9px;
            margin-top: 9%;
        }

        .button1 {
            border: 3px solid #c0504d;
            margin: 12px;
            width: 120px;
            height: 60px;
            border-radius: 35px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            font-family: sans-serif;
            cursor: pointer;
            background-color: white;
        }

        .button2 {
            border: 3px solid #4f81bd;
            margin: 12px;
            width: 130px;
            height: 60px;
            border-radius: 35px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            font-family: sans-serif;
            cursor: pointer;
            background-color: white;
        }

        .button3 {
            border: 3px solid #a6c26c;
            margin: 12px;
            width: 120px;
            height: 60px;
            border-radius: 35px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            font-family: sans-serif;
            cursor: pointer;
            background-color: white;
        }

        /* .container-main {
      background-color: blue;
    } */
    </style>
    <link rel="stylesheet" type="text/css" href="./styles.css">

</head>

<body>
    <?php include './components/headerBtns.php'; ?>


    <div class="container-main">

        <form class="fourth-form">
            <div>
                <input type="radio" name="selection" id="yesbtn" value="check1" class="input-class">
                <label>Yes</label>

                <input type="radio" name="selection" id="nobtn" value="check2" class="input-class">
                <label>No</label>
            </div>
        </form>

        <div class="container">
                <table>
                <form action="input1_re.php" method="POST">


                    <tr>
                        <td>mA Output Channel Number</td>
                        <td><input type="text" class="table-class" name="mOCN" value="1" ></td>

                    </tr>
                    <tr>
                        <td>Input Variable to Retransmit (selectable)</td>
                        <td><input type="text" class="table-class" name="IVR" value="1"></td>

                    </tr>
                    <tr>
                        <td>mA Output Mode</td>
                        <td><input type="text" class="table-class" name="mOM" id="name"></td>

                    </tr>
                    <tr>
                        <td>Output Range Limits</td>
                        <td><input type="text" class="table-class" name="ORL" value="4-20 mA"></td>

                    </tr>
                    <tr>
                        <td>Output LRV e.g.@4.0mA</td>
                        <td><input type="text" class="table-class" name="OL" value="4"></td>
                    </tr>
                    <tr>
                        <td>Output URV e.g.@20.0mA</td>
                        <td><input type="text" class="table-class" name="OU" value="20"></td>
                    </tr>
                    <tr>
                        <td>Output Value upon Input Error Condition</td>
                        <td><input type="text" class="table-class" name="OVIEC" value="4"></td>
                    </tr>
                    <tr>
                        <td>Output Load Resistance</td>
                        <td><input type="text" class="table-class" name="OLR" value="Low "></td>
                    </tr>
                </table>
        </div>

    </div>
    <!-- //////////////////////footer/////////////////////////////// -->
    <div class="footer-container">
        <button class="button1">Back</button>
        <button class="button2">Save and <br>Finish Later</button>
        <input type="submit" value="Next" name="submit" class="button3" />

    </div>
</body>
<script type="text/javascript" src="./js/input_one.js" defer></script>

</html>

<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $userid = $_COOKIE['userid'];
    $name = $_POST['mOCN'];
    $IVR = $_POST['IVR'];
    $mOM = $_POST['mOM'];
    $ORL = $_POST['ORL'];
    $OL = $_POST['OL'];
    $OU = $_POST['OU'];
    $OVIEC = $_POST['OVIEC'];
    $OLR = $_POST['OLR'];

    $insertquery = " insert into input1_re(userid, mOCN, IVR,
    mOM, ORL, OL, OU, OVIEC, OLR)
    values('$userid','$name','$IVR', '$mOM', '$ORL', '$OL',
    '$OU', '$OVIEC', '$OLR')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
        setcookie('step', 5);
        header('Location: /input_two.php');
?>
        <script>
            alert("data inserted")
        </script>
    <?php
    } else {
        echo mysqli_error($con)
//     ?>
//         <script>
//             alert("data not inserted")
//         </script>
// <?php
    }
}
?>