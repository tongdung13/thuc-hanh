<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "inc/header.php" ?>
    <hr>
    <?php 
        include_once "system/libs/Main.php";
        include "system/libs/DkController.php";
        // $main = new Main();

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        if ($url != null) {
            $url = rtrim($url, '/');
            $url = explode('/', $url);
        } else {
            unset($url);
        }

        if (isset($url[0]))
        {
            include_once "app/Controllers/$url[0].php";
            $product = new $url[0]();
            if (isset($url[2])) {
                $product->{$url[1]}{$url[2]};
            } else {
                if (isset($url[1])){
                    $product->{$url[1]}();
                }
            }
        } else {
            echo "404";
        }
        
        $product->{$url[1]}($url[2], $url[3]);
       
    ?>
    <?php include "inc/footer.php" ?>
</body>
</html>