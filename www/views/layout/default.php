<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $title ? 'Mon site | ' . $title : 'Mon site' ?></title>
</head>

<body class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input id="inputSearch" class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="button" onclick="getValue()">Search</button>
            </form>
        </div>
    </nav>
    <section  id="myDiv" class="bg-light mb-2 mt-3 p-5" style="min-height:100vh">
        <header class="jumbotron  mb-5">
            <h1 class="text-center display-4"><?= $title ?? 'Mon site' ?></h1>
        </header>
        <div><?= $content ?></div>
    </section>
    <footer class="footer bg-dark fixed-bottom py-1">
        <div class="text-center">
        <?php
            $debug = "";
            if (getenv("ENV_DEV")) {
                $end = microtime(true);
                $generationtime = number_format(($end - GENERATE_TIME_START) * 1000, 2);
                $debug = " - Page générée en " . $generationtime . " ms";
            }
            ?>
            <span class="text-white">by julien</span>
        </div>
    </footer>
    <script
        src="http://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
</body>

</html>