<?php $token = isset($_GET['token']) ? $_GET['token'] : null; ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FlatTurtle WiFi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div class="container">

        <img src="logo.png">

        <a class="btn" href="http://external.app.auki.io/connect/<?php echo $token; ?>">Connect to WiFi</a>

    </div>

    </body>
</html>
