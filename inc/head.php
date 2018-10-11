<?php
  $basePath = $_SERVER[ 'DOCUMENT_ROOT' ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="https://www.granite.ie/">
  <title>
    <?php if($metaTitle != " ") echo $metaTitle; ?> </title>
  <meta name="Description" content="<?php if($metaDescription != " ") echo $metaDescription; ?>" />
  <meta name="Keywords" content="<?php if($metaKeywords != " ") echo $metaKeywords ?>" />
  <!-- SOCIAL MEDIA -->
  <meta property="og:site_name" content="Granite Digital" />
  <meta property="og:title" content="<?php if($metaTitle != " ") echo $metaTitle ?>" />
  <meta property="og:url" content="<?php if($ogUrl != " ") echo $ogUrl ?>" />
  <meta property="og:description" content="<?php if($metaDescription != " ") echo $metaDescription ?>" />
  <meta property=”og:image” content=””/>
  <meta name="google-site-verification" content="67ThAOxAAuZWts0FXzMq2qz1V1zTOZpmmXgF1sTcW2Q" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Oswald:700" rel="stylesheet">
  <link href="./plugins/bootstrap-4.1.3/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./plugins/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="./plugins/slick/slick-theme.css"/>
  <link href="./css/styles.css" rel="stylesheet">


  <!-- Favicons ICONS -->
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
  <link rel="manifest" href="./img/favicon/site.webmanifest">
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#333333">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff"> </head>
