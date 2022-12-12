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

        DB::table('names')->insert([
        'id' =>4,
        'event_name' =>'バーベルスクワット',
        'event_picture' =>'barbell_squat.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>5,
        'event_name' =>'ゴムチューブジャイアントセット',
        'event_picture' =>'training_tube.png',
        'event_precautions' =>'痛めやすいので入念なストレッチをしましょう',
        ]);
        //セット数のところで5種目記載

        DB::table('names')->insert([
        'id' =>6,
        'event_name' =>'サイドレイズ',
        'event_picture' =>'side_raise.png',
        'event_precautions' =>'肩甲骨を寄せ、肩を上げない意識をしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>7,
        'event_name' =>'ダンベルワンハンドローイング',
        'event_picture' =>'one_hand_rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>8,
        'event_name' =>'シーテットローイング',
        'event_picture' =>'seated-rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>9,
        'event_name' =>'チューブアームカール',
        'event_picture' =>'tube_arm_curl.png',
        'event_precautions' =>'肘から先だけ動かしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>10,
        'event_name' =>'クランチ',
        'event_picture' =>'crunch.png',
        'event_precautions' =>'おへそを覗き込み、腹筋の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>11,
        'event_name' =>'ナロープッシュアップ・リバースプッシュアップ',
        'event_picture' =>'reverse_push_up.png',
        'event_precautions' =>'それぞれの筋肉の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>12,
        'event_name' =>'ワイドスクワット',
        'event_picture' =>'squat_man.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>13,
        'event_name' =>'ノーマルプッシュアップ',
        'event_picture' =>'normal_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>14,
        'event_name' =>'サイドプッシュアップ',
        'event_picture' =>'side_push_up.png',
        'event_precautions' =>'背中が丸まらないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>15,
        'event_name' =>'バックエクステンション',
        'event_picture' =>'back_extension.png',
        'event_precautions' =>'早く行うのではなく、ゆっくり取り組みましょう',
        ]);

        DB::table('names')->insert([
        'id' =>16,
        'event_name' =>'ドラゴンフラッグ',
        'event_picture' =>'dragon_flag.png',
        'event_precautions' =>'猫背や反り腰にならないよう気をつけましょう',
        ]);

        DB::table('names')->insert([
        'id' =>17,
        'event_name' =>'デクラインプッシュアップ',
        'event_picture' =>'decline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>18,
        'event_name' =>'インクラインプッシュアップ',
        'event_picture' =>'incline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        //男筋肥大終了

        DB::table('names')->insert([
        'id' =>19,
        'event_name' =>'ベンチプレス',
        'event_picture' =>'bench_press.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
        'id' =>20,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'hammer_curl.png',
        'event_precautions' =>'体の反動を使わずに',
        ]);

        DB::table('names')->insert([
        'id' =>21,
        'event_name' =>'バーベルスクワット',
        'event_picture' =>'barbell_squat.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>22,
        'event_name' =>'サイドレイズ',
        'event_picture' =>'side_raise.png',
        'event_precautions' =>'肩甲骨を寄せ、肩を上げない意識をしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>23,
        'event_name' =>'ダンベルワンハンドローイング',
        'event_picture' =>'one_hand_rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        //男maxup終了

        DB::table('names')->insert([
        'id' =>24,
        'event_name' =>'ベンチプレス',
        'event_picture' =>'bench_press.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
	    'id' =>25,
	    'event_name' =>'腹筋ローラー',
	    'event_picture' =>'ab_roller.png',
	    'event_precautions' =>'腹筋を意識して',
        ]);
        
        DB::table('names')->insert([
        'id' =>26,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'hammer_curl.png',
        'event_precautions' =>'体の反動を使わずに',
        ]);

        DB::table('names')->insert([
        'id' =>27,
        'event_name' =>'バーベルスクワット',
        'event_picture' =>'barbell_squat.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>28,
        'event_name' =>'ゴムチューブジャイアントセット',
        'event_picture' =>'training_tube.png',
        'event_precautions' =>'痛めやすいので入念にストレッチをしましょう',
        ]);
        //セット数のところで5種目記載

        DB::table('names')->insert([
        'id' =>29,
        'event_name' =>'サイドレイズ',
        'event_picture' =>'side_raise.png',
        'event_precautions' =>'肩甲骨を寄せ、肩を上げない意識をしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>30,
        'event_name' =>'ダンベルワンハンドローイング',
        'event_picture' =>'one_hand_rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>31,
        'event_name' =>'シーテットローイング',
        'event_picture' =>'seated-rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>32,
        'event_name' =>'チューブアームカール',
        'event_picture' =>'tube_arm_curl.png',
        'event_precautions' =>'肘から先だけ動かしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>33,
        'event_name' =>'クランチ',
        'event_picture' =>'crunch.png',
        'event_precautions' =>'おへそを覗き込み、腹筋の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>34,
        'event_name' =>'ナロープッシュアップ・リバースプッシュアップ',
        'event_picture' =>'reverse_push_up.png',
        'event_precautions' =>'それぞれの筋肉の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>35,
        'event_name' =>'ワイドスクワット',
        'event_picture' =>'squat_man.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>36,
        'event_name' =>'ノーマルプッシュアップ',
        'event_picture' =>'normal_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>37,
        'event_name' =>'サイドプッシュアップ',
        'event_picture' =>'side_push_up.png',
        'event_precautions' =>'背中が丸まらないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>38,
        'event_name' =>'バックエクステンション',
        'event_picture' =>'back_extension.png',
        'event_precautions' =>'早く行うのではなく、ゆっくり取り組みましょう',
        ]);


        DB::table('names')->insert([
        'id' =>39,
        'event_name' =>'デクラインプッシュアップ',
        'event_picture' =>'decline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>40,
        'event_name' =>'インクラインプッシュアップ',
        'event_picture' =>'incline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        //男ダイエット及び全男終了
        DB::table('names')->insert([
        'id' =>41,
        'event_name' =>'ベンチプレス',
        'event_picture' =>'bench_press.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
	    'id' =>42,
	    'event_name' =>'腹筋ローラー',
	    'event_picture' =>'ab_roller.png',
	    'event_precautions' =>'腹筋を意識して',
        ]);
        
        DB::table('names')->insert([
        'id' =>43,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'hammer_curl.png',
        'event_precautions' =>'体の反動を使わずに',
        ]);

        DB::table('names')->insert([
        'id' =>44,
        'event_name' =>'バーベルスクワット',
        'event_picture' =>'barbell_squat.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>45,
        'event_name' =>'ゴムチューブジャイアントセット',
        'event_picture' =>'training_tube.png',
        'event_precautions' =>'痛めやすいので入念なストレッチをしましょう',
        ]);
        //セット数のところで5種目記載

        DB::table('names')->insert([
        'id' =>46,
        'event_name' => 'サイドレイズ',
        'event_picture' =>'side_raise.png',
        'event_precautions' =>'肩甲骨を寄せ、肩を上げない意識をしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>47,
        'event_name' =>'ダンベルワンハンドローイング',
        'event_picture' =>'one_hand_rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>48,
        'event_name' =>'シーテットローイング',
        'event_picture' =>'seated-rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>49,
        'event_name' =>'チューブアームカール',
        'event_picture' =>'tube_arm_curl.png',
        'event_precautions' =>'肘から先だけ動かしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>50,
        'event_name' =>'クランチ',
        'event_picture' =>'crunch.png',
        'event_precautions' =>'おへそを覗き込み、腹筋の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>51,
        'event_name' =>'ナロープッシュアップ・リバースプッシュアップ',
        'event_picture' =>'reverse_push_up.png',
        'event_precautions' =>'それぞれの筋肉の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>52,
        'event_name' =>'ワイドスクワット',
        'event_picture' =>'squat_man.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>53,
        'event_name' =>'ノーマルプッシュアップ',
        'event_picture' =>'normal_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>54,
        'event_name' =>'サイドプッシュアップ',
        'event_picture' =>'side_push_up.png',
        'event_precautions' =>'背中が丸まらないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>55,
        'event_name' =>'バックエクステンション',
        'event_picture' =>'back_extension.png',
        'event_precautions' =>'早く行うのではなく、ゆっくり取り組みましょう',
        ]);

        DB::table('names')->insert([
        'id' =>56,
        'event_name' =>'ドラゴンフラッグ',
        'event_picture' =>'dragon_flag.png',
        'event_precautions' =>'猫背や反り腰にならないよう気をつけましょう',
        ]);

        DB::table('names')->insert([
        'id' =>57,
        'event_name' =>'デクラインプッシュアップ',
        'event_picture' =>'decline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>58,
        'event_name' =>'インクラインプッシュアップ',
        'event_picture' =>'incline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        //女筋肥大終了

        DB::table('names')->insert([
        'id' =>59,
        'event_name' =>'ベンチプレス',
        'event_picture' =>'bench_press.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
        'id' =>60,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'hammer_curl.png',
        'event_precautions' =>'体の反動を使わずに',
        ]);

        DB::table('names')->insert([
        'id' =>61,
        'event_name' =>'バーベルスクワット',
        'event_picture' =>'barbell_squat.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>62,
        'event_name' =>'サイドレイズ',
        'event_picture' =>'side_raise.png',
        'event_precautions' =>'肩甲骨を寄せ、肩を上げない意識をしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>63,
        'event_name' =>'ダンベルワンハンドローイング',
        'event_picture' =>'one_hand_rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        //女maxup終了

        DB::table('names')->insert([
        'id' =>64,
        'event_name' =>'ベンチプレス',
        'event_picture' =>'bench_press.png',
        'event_precautions' =>'手首が負けないように',
        ]);
        
        DB::table('names')->insert([
	    'id' =>65,
	    'event_name' =>'腹筋ローラー',
	    'event_picture' =>'ab_roller.png',
	    'event_precautions' =>'腹筋を意識して',
        ]);
        
        DB::table('names')->insert([
        'id' =>66,
        'event_name' =>'ハンマーカール',
        'event_picture' =>'hammer_curl.png',
        'event_precautions' =>'体の反動を使わずに',
        ]);

        DB::table('names')->insert([
        'id' =>67,
        'event_name' =>'バーベルスクワット',
        'event_picture' =>'barbell_squat.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>68,
        'event_name' =>'ゴムチューブジャイアントセット',
        'event_picture' =>'training_tube.png',
        'event_precautions' =>'痛めやすいので入念なストレッチをしましょう',
        ]);
        //セット数のところで5種目記載

        DB::table('names')->insert([
        'id' =>69,
        'event_name' =>'サイドレイズ',
        'event_picture' =>'side_raise.png',
        'event_precautions' =>'肩甲骨を寄せ、肩を上げない意識をしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>70,
        'event_name' =>'ダンベルワンハンドローイング',
        'event_picture' =>'one_hand_rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>71,
        'event_name' =>'シーテットローイング',
        'event_picture' =>'seated-rowing.png',
        'event_precautions' =>'肩甲骨の伸縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>72,
        'event_name' =>'チューブアームカール',
        'event_picture' =>'tube_arm_curl.png',
        'event_precautions' =>'肘から先だけ動かしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>73,
        'event_name' =>'クランチ',
        'event_picture' =>'crunch.png',
        'event_precautions' =>'おへそを覗き込み、腹筋の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>74,
        'event_name' =>'ナロープッシュアップ・リバースプッシュアップ',
        'event_picture' =>'reverse_push_up.png',
        'event_precautions' =>'それぞれの筋肉の収縮を意識しましょう',
        ]);

        DB::table('names')->insert([
        'id' =>75,
        'event_name' =>'ワイドスクワット',
        'event_picture' =>'squat_man.png',
        'event_precautions' =>'膝がつま先より前に出ないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>76,
        'event_name' =>'ノーマルプッシュアップ',
        'event_picture' =>'normal_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>77,
        'event_name' =>'サイドプッシュアップ',
        'event_picture' =>'side_push_up.png',
        'event_precautions' =>'背中が丸まらないようにしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>78,
        'event_name' =>'バックエクステンション',
        'event_picture' =>'back_extension.png',
        'event_precautions' =>'早く行うのではなく、ゆっくり取り組みましょう',
        ]);


        DB::table('names')->insert([
        'id' =>79,
        'event_name' =>'デクラインプッシュアップ',
        'event_picture' =>'decline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);

        DB::table('names')->insert([
        'id' =>80,
        'event_name' =>'インクラインプッシュアップ',
        'event_picture' =>'incline_push_up.png',
        'event_precautions' =>'首筋から足までを一直線にキープしましょう',
        ]);
    }
}
