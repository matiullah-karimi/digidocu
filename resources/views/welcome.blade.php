<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document Management System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #fff;
            color: #575e62;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            background-image: url("{{asset('ahsp-building.png')}}");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 16px;

        }

        .content {
            padding-top: 5%;
            padding-left: 30px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .title {
            font-size: 84px;
            color: white;
            margin-bottom: 100px;
        }

        .link {
            background: #3e843e;
            text-decoration: none;
            color: white;
            padding: 10px 2em 10px 2em;
            font-weight: bold;
            border-radius: 5px;
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            AHSP Document Management System
        </div>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="link" href="{{ route('admin.dashboard') }}">Go to Home</a>
                    @else
                        <a class="link" href="{{ route('login') }}">Login to the system</a>
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
