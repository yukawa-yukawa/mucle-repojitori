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
            'sex_id' => 1,
            'objective_id' => 1,
            'part_id' => 4,
            'equipment_id' => 3,
            'name_id' => 1,
        ]);
        
        DB::table('muscles')->insert([
            'sex_id' => 1,
            'objective_id' => 1,
            'part_id' => 2,
            'equipment_id' => 5,
            'name_id' => 2,
        ]);
        
        DB::table('muscles')->insert([
            'sex_id' => 1,
            'objective_id' => 1,
            'part_id' => 1,
            'equipment_id' => 1,
            'name_id' => 3,
        ]);
    }
}
