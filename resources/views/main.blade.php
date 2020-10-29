<html>
<head>
    <link rel="stylesheet" href="/css/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">

    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <script src="/js/map.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <title>Travel List</title>
</head>

<body class="container">

<header>
    <h1>My Travel Board:</h1>
</header>

<div class="main">
    @yield('content')
</div>

<div class="footer clearfix">
    @yield('footer')
</div>


@yield('script')


</body>
</html>
