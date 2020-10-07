@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資材一覧</title>
</head>

<body>
    <h1>台帳一覧</h1>
    <table class="table table-hover"">
        <thead>
            <tr>
                <th>ID</th>
                <th>品名</th>
                <th>登録日</th>
                <th>数量</th>
                <th>備考</th>
            </tr>
        </thead>
        @foreach($items as $item)
        <tbody>
            <tr>
                <th><a href="/items/ {{ $item->id }}">{{ $item->id }}</th>
        <td><a href="/items/{{ $item->id }}">{{ $item->name }}</a></td>
        <td>{{ $item->date }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ $item->remark }}</td>
        </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>
@endsection