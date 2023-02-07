<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurslar</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #fffaf0;
            color: #212121;
        }

        .container {
            width: 80%;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <a href="{{ route('courses.index') }}">Kurslar</a>
        </nav>
        <hr>
        @yield('content')
        <hr>
        Bu satır her şeyin altında gözüksün
    </div>
</body>

</html>
