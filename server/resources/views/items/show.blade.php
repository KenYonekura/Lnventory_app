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