<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - Twe Two</title>
        <meta charset="utf-8">
        <meta name="description" content="@yield('meta-description')">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                font-weight: 100;
                font-family: 'Raleway';
            }

            .index {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
            }

            ul li {
                display: inline;
                padding: 20px;
            }

            a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Log in</a></li>
            </ul>    
        </nav>

        @yield('content')

    </body>
</html>
