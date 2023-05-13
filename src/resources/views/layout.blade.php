<!doctype html>
<html lang="lv">

    <head>
        <meta charset="utf-8">
        <title>PD2 - {{ $title }}</title>
        <meta name="description" content="Tīmekļa Tehnoloģiju 2. praktiskais darbs">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        >

    </head>

    <body>

        <nav class="navbar bg-primary mb-3" data-bs-theme="dark">
            <header class="container">
                <a class="navbar-brand" href="#">PD2 - {{ $title }}</a>
            </header>
        </nav>


        <main class="container">
            <div class="row">
                <div class="col">

                    @yield('content')

                </div>
            </div>
        </main>

        <footer class="text-bg-dark mt-3">
            <div class="container">
                <div class="row py-5">
                    <div class="col">
                        L. Zveja, 2023
                    </div>
                </div>
            </div>
        </footer>

    </body>

</html>