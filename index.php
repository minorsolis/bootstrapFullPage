<?php
    $server = 1;
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Minor Solis" />
    <title>Bootstrap Init </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
    <div id="bg_img">
        <img src="img/home/<?php echo $server;?>.jpg" width="100%" height="100%" alt="">
    </div>

    <div class="row" id="box1">
        <h1>Server #<?php echo $server;?></h1>
    </div>

</div>


<!-- js -->
<script src="js/jquery.min.1.11.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>