<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amir : Developer's Best Friend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}" type="text/css">
    <!--JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<h1> Developer's Best Friend </h1>
<ul class="nav nav-tabs navbar-inverse">
    <li role="presentation" ><a href="/loremipsum">Lorem Ipsum Generator</a></li>
    <li role="presentation" ><a href="/profile">Random User Generator</a></li>
    <li role="presentation" ><a href="/barcode">User Barcode Renderer</a></li>
</ul><br>

<div class="container-fluid">
    <div class="row" id="home">
        <div class="col-xs-4 col-md-4">
            <a href="/loremipsum">
                <img src="/img/cartoon--crow.png" alt="cartoon lorem">
                <h1>Lorem Ipsum Generator</h1>
            </a>
            <p>Starting with a surprising vigour</p>
        </div>
        <div class="col-xs-4 col-md-4">
            <a href="/profile">
                <img src="/img/funny--crow.png" alt="cartoon profile">
                <h1>Random User Generator</h1>
            </a>
            <p>One moment, at my beck and call!</p>
        </div>
        <div class="col-xs-4 col-md-4">
            <a href="/barcode">
                <img src="/img/creative--barcode.png" alt="cartoon barcodes">
                <h1>User Barcode Renderer</h1>
            </a>
            <p>Getter crow</p>
        </div>
    </div>
</div>

<footer class="col-md-12 text-center">
    <hr />
    <p>
        <small>
            Copyright (c) 2016
        </small>
    </p>
</footer>
</body>
</html>