<?php
ob_start();
if (!isset($_COOKIE['userid'])) {
  header('Location: /index.php');
  exit();
}
// if (isset($_COOKIE['step'])) {
//   if ($_COOKIE['step'] === '2') {
//     header('Location: /AN/third.php');
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
    /* ::placeholder {
      text-align: center;
    } */
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


    /* ///////////////////////////////////////Table////////////////////////////////////////// */
    .container {
      width: 40%;
      margin: auto;
      /* background-color: red; */
      border: none;
      margin-top: 4%;

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

    /* //////////////////////////////////////////footer button////////////////////////////////////// */
    .footer-container {
            display: flex;
            /* border: 4px solid grey; */
            justify-content: space-between;
            border-radius: 9px;
            margin-top: 14%;
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
        /* .container-flex{
          background-color: #4f81bd;
          height: 100vh;
        } */
  </style>
</head>

<body>

<?php include './components/headerBtns.php'; ?>
<div class="container-flex">


<form class="fourth-form">
      <div>
        <input type="radio" name="selection" id="box1" value="check1" class="input-class">
        <label>Yes</label>

        <input type="radio" name="selection" id="box2" value="check2" class="input-class">
        <label>No</label>
      </div>
    </form>

  <div class="container">

    <table>
      <form action="#" method="POST">


      
        <tr>
          <td>Equipment Tag</td>
          <td><input type="text" class="table-class" name="equipmenttag"></td>

        </tr>
        <tr>
          <td>Plant Name</td>
          <td><input type="text" class="table-class" name="plantname"></td>

        </tr>
        <tr>
          <td>Plant Address</td>
          <td><input type="text" class="table-class" name="plantaddress"></td>

        </tr>
        <tr>
          <td>Plant ID</td>
          <td><input type="text" class="table-class" name="plantid"></td>

        </tr>
        <!-- <tr>
          <td>Record Type</td>
          <td><input type="text" class="table-class"></td>

        </tr> -->
    </table>
    <!-- </form> -->

  </div>

  <!-- <button>
    <input type="submit" value="submit" name="submit">
    Next Page
  </button> -->
  <div class="footer-container">
            <button class="button1" href="index.php">Back</button>
            <button class="button2">Save and <br>Finish Later</button>
            <button style="border: none; background-color:white"> <input type="submit" value="Next" name="submit" class="button3">
              </button>
        </div>


</div>
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

  $insertquery = " insert into second(userid, 
      equipmenttag, plantname, plantaddress, plantid)
        values('$userid','$name', '$plantname', '$plantaddress', '$plantid')";

  $res = mysqli_query($con, $insertquery);

  if ($res) {
    setcookie('step', 2);
    header('Location: /input1.php');
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