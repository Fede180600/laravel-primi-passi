<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <h1>Home</h1>

        <ul class="nav-items">
            <li><a href="{{ route('categories') }}">Categories</a></li>
            <li><a href="{{ route('contacts') }}">Contacts</a></li>
            <li><a href="{{ route('about') }}">About US</a></li>
            <li><a href="{{ route('news') }}">NEWS</a></li>
        </ul>

    </header>
    <main>
        @foreach ($articles as $item)
            <h2>{{ $item['article_title'] }}</h2>
            <p>{{ $item['article_content'] }}</p>
        @endforeach
    </main>
    
</body>
</html>