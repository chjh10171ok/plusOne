<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php echo WEB_PAGE_CHARSET; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo WEB_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo WEB_KEYWORDS; ?>">
    <meta name="author" content="<?php echo WEB_AUTHOR_NAME; ?>">
    <title><?php echo WEB_PAGE_TITLE; ?></title>
    <link href="<?php echo WEB_ROOT; ?>/asset/default/c/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo WEB_ROOT; ?>/asset/default/c/bootstrap-theme.min.css" rel="stylesheet">
    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <script src="<?php echo WEB_ROOT; ?>/asset/default/j/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body {
          padding-top: 70px;
          padding-bottom: 30px;
        }

        .theme-dropdown .dropdown-menu {
          position: static;
          display: block;
          margin-bottom: 20px;
        }

        .theme-showcase > p > .btn {
          margin: 5px 0;
        }

        .theme-showcase .navbar .container {
          width: auto;
        }
    </style>
</head>

<body role="document">
<?php require_once(BASE_ROOT . "/inc/header-nav.php"); ?>

<!-- start container -->
<div class="container">

