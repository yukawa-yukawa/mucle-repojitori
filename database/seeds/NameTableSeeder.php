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
        'event_picture' =>'https://4.bp.blogspot.com/-Fu2D8RLdffw/W5IANcOLzrI/AAAAAAABOy4/49SFFn0iTis_nhz1l4MoU_BxoE5xpzLRACLcBGAs/s800/undou_bench_press_man.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
        'id' =>2,
        'event_name' =>'腹筋ローラー',
        'event_picture' =>'https://3.bp.blogspot.com/-7nQtqwbNrq0/Wat2jUR4VTI/AAAAAAABGZI/BC1iw1-lsdAES0KFuEmWELuA1h7_L5yMACLcBGAs/s400/fukkin_roller_man.png',
        'event_precautions' =>'腹筋を意識して',
        ]);
        
        DB::table('names')->insert([
        'id' =>3,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtMvGlgbWm-1p7-AAAc3ZuoQtSleP1Mn76LsJug_rRIuIh1ZDE&s',
        'event_precautions' =>'体の反動を使わずに',
        ]);
    }
}
