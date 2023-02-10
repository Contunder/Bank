<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/library/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/library/font-awesome/css/font-awesome.min.css">
    <script src='/library/js/jquery-3.2.1.min.js'></script>
    <script src='/library/js/popper.min.js'></script>
    <script src='/library/js/bootstrap.min.js'></script>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Banque - @yield('title')</title>
</head>
<body>
@include('partials.navigation')
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
</body>
</html>
