<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nginx Admin Panel</title>
</head>
<body>
    <h1>sofiaslost.co.uk Hotspot</h1>
    <?php
    $interface_to_detect = 'swlan0';
    echo explode(' ',explode(':',explode('inet addr',explode($interface_to_detect,trim(`ifconfig`))[1])[1])[1])[0];
    ?>
</body>
</html>