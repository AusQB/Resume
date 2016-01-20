<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Robert Gillman</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header id="header">
    <div class="container"></div>
</header>

<div id="main">
    <section id="intro"><? include('sections/intro.php') ?></section>
    <!-- <section id="objective"><? // include('sections/objective.php') ?></section> -->
    <section id="education"><? include('sections/education.php') ?></section>
    <section id="experience"><? include('sections/experience.php') ?></section>
    <section id="skills"><? include('sections/skills.php') ?></section>
    <section id="portfolio"><? include('sections/portfolio.php') ?></section>
    <section id="personal"><? include('sections/personal.php') ?></section>
</div>

<footer id="footer">
    <div class="container"></div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-54721711-1');ga('send','pageview');
</script>
</body>
</html>