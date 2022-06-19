<?php

use Illuminate\Database\Seeder;

class QuizyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            // 'prefecture_id'=>1,
            'question_id'=>1,
            'name'=>'たかなわ',
            'valid'=>0,
        ];
        DB::table('quizy')->insert($param);

        $param = [
            // 'prefecture_id'=>1,
            'question_id'=>1,
            'name'=>'こうわ',
            'valid'=>0,
        ];
        DB::table('quizy')->insert($param);

        $param = [
            // 'prefecture_id'=>1,
            'question_id'=>1,
            'name'=>'たかわ',
            'valid'=>0,
        ];
        DB::table('quizy')->insert($param);

        $param = [
            // 'prefecture_id'=>1,
            'question_id'=>2,
            'name'=>'わああ',
            'valid'=>0,
        ];
        DB::table('quizy')->insert($param);

        $param = [
            // 'prefecture_id'=>1,
            'question_id'=>2,
            'name'=>'をおお',
            'valid'=>0,
        ];
        DB::table('quizy')->insert($param);

        $param = [
            // 'prefecture_id'=>1,
            'question_id'=>2,
            'name'=>'うぇえ',
            'valid'=>0,
        ];
        DB::table('quizy')->insert($param);
    }
}
