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
    <h1>資材数量変更</h1>
    <ul>
        <table class="table table-bordered">
            <tr>
                <td>品名</td>
                <td>{{ $item->name }}</td>
            </tr>
            <tr>
                <td>管理ナンバー</td>
                <td>{{ $item->num }}</td>
            </tr>
            <tr>
                <td>登録日</td>
                <td>{{ $item->date }}</td>
            </tr>
            <tr>
                <td>品名コード</td>
                <td>{{ $item->code }}</td>
            </tr>
            <tr>
                <td>規格</td>
                <td>{{ $item->standard }}</td>
            </tr>
            <tr>
                <td>数量</td>
                <td>{{ $item->quantity }}</td>
            </tr>
            <tr>
                <td>備考</td>
                <td>{{ $item->remark }}</td>
            </tr>
            <tr>
                <td>検収金額</td>
                <td>{{ $item->acceptance }}</td>
            </tr>
            <tr>
                <td>画像</td>
                <td><img src="/storage/image/{{ $item->image }}"></td>
            </tr>
        </table>
        <a href="/items/{{ $item->id }}/edit">編集する</a>
        <a href="/items/{{ $item->id }}/delete">削除する</a>
    </ul>
</body>

</html>
@endsection