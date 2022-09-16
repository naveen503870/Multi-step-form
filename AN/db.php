<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "an";

$con = mysqli_connect($server, $user, $password,$db);
if($con){
    ?>
    <script>
        alert("coonection done");
        </script>
        <?php
}else{
    die("no coonection" .mysqli_connect_error());
?>
<!-- <script>
    alert("not");
    </script> -->
    <?php
    
}

?>