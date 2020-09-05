<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資材一覧</title>
</head>

<body>
    <h1>資材数量変更</h1>
    <ul>
        <!--更新先はitemsのidにしないと増える php artisan route:listで確認①-->
        <form action="/items/{{ $item->id }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan route:listで確認② -->
            @method('PUT')
            <!-- idはそのまま -->
            <input type="hidden" name="id" value="{{ $item->id }}">
            <p>
                <b>品名：{{ $item->name }}</b></br>
                <input type=" text" name="name" value="{{ $item->name }}">
            </p>
            <p>
                <b>管理ナンバー：{{ $item->num }}</b>
            </p>
            <p>
                <b>登録日：{{ $item->date }}</b>
            </p>
            <p>
                <b>品名コード：{{ $item->code }}</b>
            </p>
            <p>
                <b>規格：{{ $item->standard }}</b>
            </p>
            <p>
                <b>数量：{{ $item->quantity }}</b>
            </p>
            <p>
                <b>備考：{{ $item->remark }}</b>
            </p>
            <p>
                <b>検収金額：{{ $item->acceptance }}</b>
            </p>
            <p>
                <img src="/storage/image/{{ $item->image }}">
            </p>
            <input type="submit" value="更新">
        </form>
    </ul>
</body>

</html>