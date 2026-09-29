<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>挨拶</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>挨拶</h1>

        <p>{{ $greeting }}、{{ $name }}さん！</p>

        <a href="{{ route('greeting.form') }}">← 戻る</a>
    </div>

</body>

</html>