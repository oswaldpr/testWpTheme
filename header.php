<!DOCTYPE html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo ATP_PROJECT_NAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css' ?>">

    <?php wp_head(); ?>
</head>
<body class = "<?php echo generateFileInitiatorName(); ?>">
<div id="atpTheme" class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><?php echo ATP_PROJECT_NAME; ?></a>
        </div>
        <div id="navbar" class="navbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/<?php echo ATP_PAGE_SLUG; ?>/about-us">About us</a></li>
            </ul>
        </div>
    </nav>