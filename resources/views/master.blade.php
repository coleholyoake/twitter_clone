<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - tweet.2</title>
        <meta charset="utf-8">
        <meta name="description" content="@yield('meta-description')">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet" type="text/css">

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
                width: 20%;
            }

            .title {
                margin-top: 50px;
                font-size: 72px;
            }

            .secondaryTitle {
                font-size: 25px;
                color: #fff;
                background-color: #35b2d6;
                padding: 5px;
            }

            ul li {
                display: inline;
                padding: 20px;
                font-weight: 300;
            }

            a {
                text-decoration: none;
            }

            a:hover {
                border-bottom: 1px solid;
            }

            form {
                width: 20%;
                margin: 50px auto;
            }

            input, label, textarea {
                float: left;
                width: 100%;
                text-align: left;
                margin-top: 10px;
            }

            span {
                text-align: right;
                color: #d63545;
                float: right;
                font-weight: 300;
            }

            input {
                height: 20px;
            }

            input[type='submit'] {
                width: 75px;
                height: 75px;
                background-color: #000;
                border: none;
                color: #fff;
                margin: 20px auto;
                float: right;
                text-align: center;
                border-radius: 100%;
                font-size: 16px;
                font-weight: 100;
                font-family: 'Raleway';
            }

            input[type='submit']:hover {
                background-color: #35b2d6;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contact">Contact</a></li>

                @if(\Auth::check())
                <li><a href="/logout">Logout</a></li>
                @else
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
                @endif

            </ul>    
        </nav>

        @yield('content')

    </body>
</html>
