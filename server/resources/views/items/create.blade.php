<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資材登録</title>
</head>

<body>
    <h1>資材登録</h1>
    <!-- 登録フォームにenctype="multipart/form-dataを追加｡これがないとフォームデータを送る事ができない -->
    <form action="/items" method="post" enctype="multipart/form-data">
        @csrf
        <ul>
            <p>
                <b>資材名：<br><input type="text" name="name" value="{{ old('name') }}"><b>
            </p>
            <p>
                <b>管理ナンバー：<br><input type="text" name="num" value="{{ old('num') }}"></b>
            </p>
            <p>
                <b>品名コード：<br><input type="text" name="code" value="{{ old('code') }}"></b>
            </p>
            <p>
                <b>日付：<br><input type="date" name="date" value="{{ old('date') }}"></b>
            </p>
            <p>
                <b>規格：<br><input type="text" name="standard" value="{{ old('standard') }}"></b>
            </p>
            <p>
                <b>数量：<br><input type="text" name="quantity" value="{{ old('quantity') }}"></b>
            </p>
            <p>
                <b>備考：<br><input type="text" name="remark" value="{{ old('remark') }}"></b>
            </p>
            <p>
                <b>検収金額：<br><input type="text" name="acceptance" value="{{ old('acceptance') }}"></b>
            </p>
            <p>
                <b>画像：<br><input type="file" name="image" value="{{ old('image') }}"></b>
            </p>
            <input type="submit" value="登録">
        </ul>
    </form>
</body>

</html>