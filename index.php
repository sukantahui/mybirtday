<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <style>
        #background {
            background-image: url("image/welcome sir.jpg");
            background-size: cover;
            height: 800px;
            background-repeat: no-repeat;
        }
    </style>

</head>
<body>
<div id="outer_div">
    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo"><h4>TODAY</h4></button>
                <div id="demo" class="collapse">
                    <button id="day"><img src="image/date.png" height="70px"></button>
                </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12" id="background">
                <img src="image/hanging.png" height="500px">
            </div>
        </div>
        </div>

    </div>
<script src="control.js"></script>




</body>
</html>