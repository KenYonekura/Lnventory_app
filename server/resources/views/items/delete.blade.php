<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資材一覧</title>
</head>

<body>
    <h1>出品者一覧</h1>
    <ul>
        @foreach($items as $item)
        <li><a href="/items/{{ $item->id }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</body>

</html>