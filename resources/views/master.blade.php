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
                display: block;
                width: 100%;
                padding: 0 35% 60px 35%;
                box-sizing: border-box;
                clear: both;
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
                width: 30%;
                margin: 50px auto;
                clear: both;
            }

            .commentform {
                width: 100%;
                padding-bottom: 100px;
                margin-top: 0px;
                box-sizing: border-box;
            }

            input, label, textarea {
                float: left;
                width: 100%;
                text-align: left;
                margin-top: 10px;
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
                font-size: 14px;
                font-weight: 100;
                font-family: 'Raleway';
                clear: both;
            }

            input[type='submit']:hover {
                background-color: #35b2d6;
            }

            img {
                float: left;
                margin-right:20px;
            }

            .description {
                text-align: justify;
                margin-top: 0px;
            }

            small {
                font-weight: 100;
                color: #35b2d6;
            }

            span, span small {
                text-align: right;
                color: #d63545 !important;
                float: right;
                font-weight: 300;
            }

            .tweet {
                text-align: left;
                font-weight: 300;
            }

            .comment {
               

            }

            h2, h3, p {
                margin-bottom: 0px;
            }

            hr {
                margin: 60px auto;
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
