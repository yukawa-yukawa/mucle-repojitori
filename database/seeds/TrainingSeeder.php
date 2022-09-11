<?php

use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muscles')->insert([
            'id' => 1,
            'sex' => 1,
            'objective' => 1,
            'part' => 4,
            'equipment' => 3,
            'memo' => ''
        ]);
        
        DB::table('muscles')->insert([
            'id' => 2,
            'sex' => 1,
            'objective' => 1,
            'part' => 2,
            'equipment' => 5,
            'memo' => ''
        ]);
        
        DB::table('muscles')->insert([
            'id' => 3,
            'sex' => 1,
            'objective' => 1,
            'part' => 1,
            'equipment' => 1,
            'memo' => ''
        ]);
    }
}
