<!doctype html>
<html lang="lv">

    <head>
        <meta charset="utf-8">
        <title>PD2 - {{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous"
    >

    </head>

    <body>
        <header class="navbar navbar-dark bg-dark mb-5">
            <div class="container">
                <span class="navbar-brand mb-0 h1">{{ $title }}</span>
            </div>
        </header>

        <main class="container">
            <div id="root"></div>
        </main>

        <footer class="mt-5 py-5">
            <div class="container">
                Laura Zveja, VeA, 2023
            </div>
        </footer>

        <script src="{{ asset('/js/app.js') }}"></script>
    </body>

</html>
