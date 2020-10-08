<?php

namespace App\Http\Controllers;
// Itemクラスを読み込む
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // showページへ移動
    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show', ['item' => $item]);
    }
    // 編集ページへ移動
    public function edit($id)
    {
        $item = Item::find($id);
        return view('Items.edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        // idを探して持ってくる以外はstoreと同じ
        $item = Item::find($id);

        // 値の用意
        $item->quantity = $request->quantity;
        $item->remark = $request->remark;

        $item->timestamps = false;
        // 保存
        $item->save();
        // 登録したらインデックスに戻る
        return redirect('/items');
    }

    // 削除ページへ移動
    public function delete($id)
    {
        $item = Item::find($id);
        return view('Items.delete', ['item' => $item]);
    }
    // 削除動作
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');
    }
    // 資材追加ページへ移動
    public function create()
    {
        return view('Items.create');
    }

    public function store(Request $request)
    {
        // インスタンス生成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->num = $request->num;
        $item->code = $request->code;
        $item->date = $request->date;
        $item->standard = $request->standard;
        $item->quantity = $request->quantity;
        $item->remark = $request->remark;
        $item->acceptance = $request->acceptance;
        $filename = $request->file('image')->store('public/image');
        $item->image = basename($filename);
        $item->timestamps = false;

        // インスタンスに値を設定して保存
        $item->save();

        // 登録したらindexに戻る
        return redirect('/items');
    }

    // 一覧ページへ移動
    public function index()
    {
        // モデル名：：テーブル全件名取得
        $items = Item::all();
        // Itemsディレクトリの中のindexページを指定して,itemsの連想配列を代入
        return view('Items.index', ['items' => $items]);
    }
}
