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

    // indexページへ移動
    public function index()
    {
        // モデル名：：テーブル全件名取得
        $items = Item::all();
        // Itemsディレクトリの中のindexページを指定して,itemsの連想配列を代入
        return view('Items.index', ['items' => $items]);
    }
}
