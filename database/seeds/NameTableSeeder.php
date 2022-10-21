<?php

use Illuminate\Database\Seeder;

class NameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert([
        'id' =>1,
        'event_name' =>'ベンチプレス',
        'event_picture' =>'bench_press.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
        'id' =>2,
        'event_name' =>'腹筋ローラー',
        'event_picture' =>'ab_roller.png',
        'event_precautions' =>'腹筋を意識して',
        ]);
        
        DB::table('names')->insert([
        'id' =>3,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'hammer_curl.png',
        'event_precautions' =>'体の反動を使わずに',
        ]);
    }
}
