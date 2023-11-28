<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style_header.css" />
    <link rel="stylesheet" href="./css/style_footer.css" />
    <link rel="stylesheet" href="./css/style_main.css" />
    <link rel="stylesheet" href="./pages/main/css/style_login.css" />
    <link rel="stylesheet" href="./pages/main/css/style_register.css" />
    <link rel="stylesheet" href="./pages/main/css/style_info.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Shoes Store</title>
</head>

<body>
    <div class="wrapper">
        <?php
        session_start();
        include("admincp/config/connect.php");
        include("pages/layout/header.php");
        include("pages/layout/main.php");
        include("pages/layout/footer.php");
        ?>
    </div>
</body>

</html>