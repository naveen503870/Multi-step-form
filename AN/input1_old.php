<?php
ob_start();
if (!isset($_COOKIE['userid'])) {
  header('Location: /index.php');
  exit();
}
// if (isset($_COOKIE['step'])) {
//   $arr = [
//     '1' => "/AN/second.php",
//   ];
//   if (array_key_exists($_COOKIE['step'], $arr)) {
//     header('Location: ' . $arr[$_COOKIE['step']]);
//     exit();
//   }
// } else {
//   header('Location: /AN/index.php');
//   exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>
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




  </style>
</head>

<body>

<?php include './components/headerBtns.php'; ?>

  <div class="table-fourth">
    <table>
      <form action="input1_old.php" method="POST">


        <tr>
          <td>Equipment Tag</td>
          <td><input type="text" name="equipmenttag" style="border:none;width: 100%; height: 100%; background-color:#e9edf4;" placeholder="text">
            </input></td>
        </tr>
        <tr>
          <td>Plant Name </td>
          <td><input type="text" name="plantname" style="border:none;width: 100%; height: 100%; background-color:#e9edf4;" placeholder="text">
            </input></td>
        </tr>
        <tr>
          <td>Plant Address </td>
          <td><input type="text" name="plantaddress" style="border:none;width: 100%; height: 100%; background-color:#e9edf4;" placeholder="text">
            </input></td>
        </tr>
        <tr>
          <td>Plant ID</td>
          <td><input type="text" name="plantid" style="border:none;width: 100%; height: 100%; background-color:#e9edf4;" placeholder="text">
            </input></td>
        </tr>
        <!-- </form> -->
    </table>
  </div>

  <button>
    <input type="submit" value="submit" name="submit">
    Next Page
  </button>



</body>

</html>
<?php
include 'db.php';



if (isset($_POST['submit'])) {
  $name = $_POST['equipmenttag'];
  $plantname = $_POST['plantname'];
  $plantaddress = $_POST['plantaddress'];
  $plantid = $_POST['plantid'];
  $userid = $_COOKIE['userid'];

  $insertquery = " insert into third(userid,
      equipmenttag,plantname,plantaddress,plantid)
        values('$userid', '$name', '$plantname', '$plantaddress', '$plantid')";

  $res = mysqli_query($con, $insertquery);

  if ($res) {
    setcookie('step', 3);
    header("Location: /input1.php");
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