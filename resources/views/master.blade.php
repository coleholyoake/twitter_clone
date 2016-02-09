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
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Raleway';
            }

            .container {
                text-align: center;
                display: table-cell;
                /*vertical-align: middle;*/
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
