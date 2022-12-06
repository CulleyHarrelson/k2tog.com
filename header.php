<?php
if ($_SERVER['SERVER_NAME'] != 'localhost' && empty($_SERVER['HTTPS'])) {
    header('Location: https://www.k2tog.com' . $_SERVER['PHP_SELF']);
    exit;
}

// uncomment when bringing k2tog.com "offline"
//require_once('basic.php');
//exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Culley Harrelson, PhD. Business Intelligence, Clinical Psychology, San Francisco, Bay Area, USA">
    
    <title><?= $GLOBALS['title'] ?></title>
    <link rel="canonical" href="https://www.k2tog.com<?= $_SERVER['PHP_SELF'] ?>"/>
    <meta property="og:site_name" content="Culley Harrelson"/>
    <meta property="og:title" content="<?= $GLOBALS['title'] ?>"/>
    <meta property="og:url" content="https://www.k2tog.com<?= $_SERVER['PHP_SELF'] ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="name" content="<?= $GLOBALS['title'] ?>"/>
    <meta property="url" content="https://www.k2tog.com<?= $_SERVER['PHP_SELF'] ?>"/>
    <meta name="twitter:title" content="<?= $GLOBALS['title'] ?>"/>
    <meta name="twitter:url" content="https://www.k2tog.com<?= $_SERVER['PHP_SELF'] ?>"/>
    <meta name="twitter:card" content="summary"/>
     <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <link rel="icon" type="image/png" href="https://www.k2tog.com/favicon.ico">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123732763-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-123732763-1');
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="index.php">Culley Harrelson</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link active" href="index.php">About</a>
<a class="nav-item nav-link" href="portfolio.php">Portfolio</a>
<a class="nav-item nav-link" href="book_reviews.php">Book Reviews</a>
<a class="nav-item nav-link" href="contact.php">Contact</a>
</div>
</div>
</nav>
