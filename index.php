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
        // if user from the share internet   
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {   
            echo 'IP address = '.$_SERVER['HTTP_CLIENT_IP'];   
        }   
        //if user is from the proxy   
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   
            echo 'IP address = '.$_SERVER['HTTP_X_FORWARDED_FOR'];   
        }   
        //if user is from the remote address   
        else{   
            echo 'IP address = '.$_SERVER['REMOTE_ADDR'];   
        }     
    ?>
</body>
</html>