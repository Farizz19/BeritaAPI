<html>
    <head></head>
    <body>
        @foreach($news as $n)
            {{ $n['content'] }}
        @endforeach
    </body>
</html>