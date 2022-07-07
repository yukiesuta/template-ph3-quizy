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

        $params = [
            [
                'question_id' => 1,
                'name' => 'たかなわ',
                'valid' => 1,
            ],
            [
                'question_id' => 1,
                'name' => 'たかわ',
                'valid' => 0,
            ],
            [
                'question_id' => 1,
                'name' => 'こうわ',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'name' => 'かめと',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'name' => 'かめど',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'name' => 'かめいど',
                'valid' => 1,
            ],
            [
                'question_id' => 3,
                'name' => 'むこうひら',
                'valid' => 0,
            ],
            [
                'question_id' => 3,
                'name' => 'むきひら',
                'valid' => 0,
            ],
            [
                'question_id' => 3,
                'name' => 'むかいなだ',
                'valid' => 1,
            ],
            
        ];
        DB::table('choices')->insert($params);

        $params = [
            [
                'big_question_id' => 1,
                'image' => 'takanawa.png'
            ],
            [
                'big_question_id' => 1,
                'image' => 'kameido.png'
            ],[
                'big_question_id' => 2,
                'image' => 'mukainada.png'
            ],
        ];
        DB::table('questions')->insert($params);

        $params = [
            [
                'name' => '東京の難読地名クイズ'
            ],
            [
                'name' => '広島の難読地名クイズ'
            ]
        ];
        DB::table('big_questions')->insert($params);
    }
}
