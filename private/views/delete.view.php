<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($_SESSION['USER']->username); ?></title>
    <link rel="stylesheet" href="<?= ROOT ?>/styles/styles.css">
    <link rel="stylesheet" href="<?= ROOT ?>/styles/cashier.css">
    <link rel="stylesheet" href="<?= ROOT ?>/styles/navbar.css">

    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
<div class="login-container" style="width:100px;height:100px"></div>
</body>
</html>