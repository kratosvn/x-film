<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="vn_VN" />
    <meta property="og:type" content="film" />
    <meta property="og:title" content="X-Film" />
    <meta name="description" content="X-Film">

    <meta name="keywords" content="X-Film">

    <meta property="og:url" content="http://nguoi-phan-xu.com" />
    <meta property="og:site_name" content="X-Film" />
    <meta property="article:section" content="Film" />
    <meta property="og:image" content="http://res.cloudinary.com/dzaidinjj/image/upload/v1495904041/Nguoi-phan-xu-660_rknnyy.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  crossorigin="anonymous">
    <title>X-Film</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    @yield('css')
</head>
<body>
<div class="container main">
    @include('app.header')
    @yield('body')
</div>
</body>
</html>
