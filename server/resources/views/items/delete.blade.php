<h1>削除してもよろしいですか？</h1>
<form action="/items/{{ $item->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $item->id }}">
    <p>
        <b>品名：{{ $item->name }}</b>
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
    <a href="/items/{{ $item->id }}/edit">編集する</a>
    <a href="/items/{{ $item->id }}/delete">削除する</a>
</form>