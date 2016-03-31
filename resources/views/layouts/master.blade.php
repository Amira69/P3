<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amir : Developer's Best Friend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<h1> Developer's Best Friend </h1>
<ul class="nav nav-tabs navbar-inverse">
    <li role="presentation"><a href="/">Home</a></li>
    <li role="presentation" class={{$nav1}}><a href="/loremipsum">Lorem Ipsum Generator</a></li>
    <li role="presentation" class={{$nav2}}><a href="/profile">Random User Generator</a></li>
    <li role="presentation" class={{$nav3}}><a href="/barcode">User Barcode Renderer</a></li>
</ul>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            @yield('menu')
        </div>
        <div class="col-xs-12 col-md-8">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>


