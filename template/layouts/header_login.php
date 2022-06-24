<?php
if (!defined('_INCODE')) die('Access deined...');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo _WEB_HOST_TEMPLATE; ?>/images/logo/353261.png" sizes="16x16">
    <title>Quản lý người dùng | <?php echo !empty($data['page_title']) ? $data['page_title'] : '' ?></title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE; ?>/css/style.css">
</head>

<body>
    <div class="container">