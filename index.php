<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my website</title>

    <script src="assets/jquery.min.js"></script>
    <style>
    .block {clear:both;text-align:center;}
    .side-block {float:left;padding: 5px;}
    .menu {
        background: cornflowerblue;
        padding: 5px;
    }
    .menu a {
        color: yellow;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <?php include_once(dirname(__FILE__).'/template/header.php'); ?>
    <?php include_once(dirname(__FILE__).'/template/body.php'); ?>
    <?php include_once(dirname(__FILE__).'/template/footer.php'); ?>

    <script src="assets/functions.js"></script> 
</body>
</html>