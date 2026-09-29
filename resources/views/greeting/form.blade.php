<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>挨拶フォーム</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 12px;
        }

        input {
            padding: 10px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>挨拶アプリ</h1>

        <form action="{{ route('greeting.greet') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="名前を入力">

            <button type="submit">送信</button>
        </form>

    </div>

</body>

</html>