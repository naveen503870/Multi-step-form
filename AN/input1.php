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
        /* //////////////////////////////////////progress bar////////////////////////////////////////////////////////// */
        .container1 {

            display: flex;
        }

        input:disabled {
            color: red;
        }

        .text {
            background-color: #a6a6a6;
            height: 50px;
            width: 100%;
            margin-top: 100px;
            margin: 4px;
            text-align: center;
            padding-top: 12px;
            border-width: 1px solid black;
        }

        .text:hover {
            background-color: #004c9c;
        }

        .text a {
            color: white;
            font-weight: bold;
            text-decoration: none !important;
        }

        /* /////////////////////////////////////////////////////////////// */


        .container-main-table {
            /* background-color: aquamarine; */
            display: flex;
            justify-content: space-around;
            margin-top: 1%;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;

            background-color: #e9edf4;
        }

        td {
            border: 2px solid white;
            text-align: center;
            /* height: 4vh; */
            padding: 3px;

        }

        input {
            text-align: center;
            background-color: #e9edf4;
            border-color: #e9edf4;
            border-top: #e9edf4;
            border-left: #e9edf4;

        }


        /* //////////////////////////////////////////footer button///////////////////////////////////////// */

        .footer-container {
            display: flex;
            /* border: 4px solid grey; */
            justify-content: space-between;
            border-radius: 9px;
            margin-top: 2%;
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

        input[type="text"][disabled] {
            color: #888;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="./styles.css">

</head>

<body>
    <?php include './components/headerBtns.php'; ?>

    <div class="container-flex">

        <form action="input1.php" method="POST">
            <div class="container-main-table">
                <div class="container-table1">
                    <table>

                        <tr>
                            <td style="text-align: right;">Input Number</td>
                            <td><input type="text" value="1" disabled> </input></td>
                            <td><input type="text" value="1" disabled> </input></td>

                        </tr>
                        <tr>
                            <td style="text-align: right;">Display Name</td>
                            <td><input type="text" value="STLR 1" disabled> </input></td>
                            <td><input type="text" value="STLR 2" disabled> </input></td>

                        </tr>
                        <tr>
                            <td style="text-align: right;">Type</td>
                            <td><input type="text" value="Pt 1000" disabled> </input></td>
                            <td><input type="text" value="Pt 1000" disabled> </input></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Display Units</td>
                            <td><input type="text" value="F" name="displayunitone"> </input></td>
                            <td><input type="text" value="F" name="displayunittwo"> </input></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Display Unit Lower Range Value</td>
                            <td><input type="text" value="32" disabled> </input></td>
                            <td><input type="text" value="32" disabled> </input></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Display Unit Lower Range Value</td>
                            <td><input type="text" value="392" disabled> </input></td>
                            <td><input type="text" value="392   " disabled> </input></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Decimal Position</td>
                            <td><input type="text" value="1" name="decimalpositionone"> </td>
                            <td><input type="text" value="1" name="decimalpositiontwo"></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Sensor Break Recording</td>
                            <td><input type="text" value="Record-Sensor Break" name="RSB1"> </input></td>
                            <td><input type="text" value="Record-Sensor Break" name="RSB2"> </input></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Damping (Seconds)</td>
                            <td><input type="text" value="1" name="DS1"> </input></td>
                            <td><input type="text" value="1" name="DS2"> </input></td>
                        </tr>
                    </table>
                </div>

                <div class="container-table2" style="width: 29%;">
                    <table width="100%">

                        <tr>
                            <td>STLR Setpoint dead band</td>
                            <td width="20%">1</td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP1</td>
                            <td width="20%">161</td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP2</td>
                            <td width="20%">65</td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP3</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP4</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP5</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP6</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP7</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP8</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP9</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP10</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP11</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP12</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP13</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP14</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP15</td>
                            <td><input type="text" value="1" style="width: 59px;"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <tr>
                            <td>STLR SP16</td>
                            <td><input type="text" value="1" style="width: 59px;" name="SP16"> </input></td>
                            <td width="20%">°F</td>
                        </tr>
                        <!-- <input type="submit" value="Next" name="submit" class="button3" style="border: none; background-color:white" /> -->

                    </table>
                </div>
            </div>
        <!-- </form> -->
    </div>
    <!-- //////////////////////footer/////////////////////////////// -->
    <div class="footer-container">
        <button class="button1">Back</button>
        <button class="button2">Save and <br>Finish Later</button>
        <input type="submit" value="Next" name="submit" class="button3"  />

    </div>
</body>

</html>
<?php
include 'db.php';

if (isset($_POST['submit'])) {

    $userid = $_COOKIE['userid'];
    $dunitone = $_POST['displayunitone'];
    $dunittwo = $_POST['displayunittwo'];
    $decimalpositionone = $_POST['decimalpositionone'];
    $decimalpositiontwo = $_POST['decimalpositiontwo'];
    $RSB1 = $_POST['RSB1'];
    $RSB2 = $_POST['RSB2'];
    $DS1 = $_POST['DS1'];
    $DS2 = $_POST['DS2'];
    $SP16 = $_POST['SP16'];




    $insertquery = "insert into inputone(userid, displayunitone, displayunittwo, decimalpositionone, decimalpositiontwo,
    RSB1,RSB2, DS1, DS2, SP16 )
        values($userid,'$dunitone', '$dunittwo', '$decimalpositionone', '$decimalpositiontwo', '$RSB1' ,'$RSB2'
        , '$DS1', '$DS2' ,'$SP16')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
        setcookie('step', 2);
        header('Location: /input1_re.php');
?>
        <script>
            alert("data inserted")
        </script>
    <?php
    } else {
        echo mysqli_error($con);
    ?>
        <script>
            alert("data not inserted")
        </script>
<?php
    }
}
?>