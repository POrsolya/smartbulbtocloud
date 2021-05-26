<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarthome - @yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Styles-->
    <style>
        html,
        body {
            background-color: #fff;
            background-image: url('smart-home-background.jpg');
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 400;
            height: 90%;
            width: 95%;
        }

        .content {
            margin-left: 45%;
            margin-top: 20%;
        }
    </style>
</head>

<body>
    <div class="content">
        @yield('content')
    </div>
</body>
<footer></footer>

</html>