<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1件だけINSERTパターン
        DB::table('items')->insert([
            'name' => '直線スリーブ',
            'num' => '1065',
            'date' => date('Y-m-d H:i:s'),
            'code' => 'K9051',
            'standard' => 'ACSR160用',
            'quantity' => '3',
            'remark' => '復旧資材',
            'acceptance' => '18500',
            'image' => '直線スリーブ.jpg',
        ]);
        // paramに配列を代入
        $param = [
            [
                'name' => '捻れ防止ダンパ',
                'num' => '1066',
                'date' => date('Y-m-d H:i:s'),
                'code' => 'K9051',
                'standard' => 'ACSR320用',
                'quantity' => '42',
                'remark' => '2021年A線ほか電線補修工事で使用予定',
                'acceptance' => '800000',
                'image' => 'NBD.jpg',
            ],
            [
                'name' => 'ダブルトーショナルダンパ',
                'num' => '1067',
                'date' => date('Y-m-d H:i:s'),
                'code' => 'K9051',
                'standard' => 'SBACSR210用',
                'quantity' => '15',
                'remark' => '2020年B線ほか電線補修工事で使用予定',
                'acceptance' => '600000',
                'image' => 'DTD.jpg',
            ],
            [
                'name' => '圧縮耐長クランプ',
                'num' => '1068',
                'date' => date('Y-m-d H:i:s'),
                'code' => 'K9051',
                'standard' => 'SBACSR210用',
                'quantity' => '6',
                'remark' => '2020年C線ほか電線補修工事で使用予定',
                'acceptance' => '90000',
                'image' => '圧縮耐長クランプ.jpg',
            ]
        ];
        DB::table('items')->insert($param);
    }
}
