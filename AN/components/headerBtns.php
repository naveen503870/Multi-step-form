<?php

function getCardIndex($param)
{
    if ($param == strtolower($_SERVER['SCRIPT_NAME'])) {
        // echo $_SERVER['SCRIPT_NAME'] . $param;
        return "activeCard";
    }
    // echo $_SERVER['SCRIPT_NAME'] . $param;
    return '';
}
?>


<div class="container1">
    <div class="text <?php echo getCardIndex('/index.php'); ?>"><a href="index.php">Welcome</a> </div>
    <div class="text <?php echo getCardIndex('/plant.php'); ?>"><a href="#">Plant</a> </div>
    <div class="text <?php echo getCardIndex('/input1.php'); ?>"><a href="#">Input 1</a> </div>
    <div class="text <?php echo getCardIndex('/example.php'); ?>"><a href="#">Input 1 Retransmit</a> </div>
    <div class="text"><a href="#">Input 2</a> </div>
    <div class="text"><a href="#">Input 2 Retransmit</a> </div>
    <div class="text"><a href="#">Input 3</a> </div>
    <div class="text"><a href="#">Input 3 Retransmit</a> </div>
    <div class="text"><a href="#">Input 4</a> </div>
    <div class="text"><a href="#">Input 4 Retransmit</a> </div>
</div>