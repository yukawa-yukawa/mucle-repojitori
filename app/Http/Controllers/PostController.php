<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $index_sex = $request->input('sex');
        $index_objective = $request->input('objective');
        $index_part = $request->input('part');
        $index_equipment = $request->input('equipment');
        
        $training_sex = config('training_sex');
        $training_objective = config('training_objective');
        $training_part = config('training_part');
        $training_equipment = config('training_equipment');
        
        $data = [
            "training_sex" => $training_sex,
            "training_objective" => $training_objective,
            "traning_" => $training_part,
            "traning_" => $training_equipment,
        ];
        
        return view('/index',$data);
    }
    
    public function menu(Request $request, Menu $menu)
    {
        $serch_sex = $request->input('sex');
        $serch_objective = $request->input('objective');
        $serch_part = $request->input('part');
        $serch_equipment = $request->input('equipment');
        
        $query = muscles::query();
        
        if (!is_null($index_sex) && $index_sex != 0) {
            $query->where('training_sex', $training_sex)->get();
        }

        if (!is_null($index_objective) && $index_objective != 0) {
            $query->where('training_objective', $training_objective)->get();
        }

        if (!is_null($index_part) && $index_part != 0) {
            $query->where('training_part', $training_part)->get();
        }

        if (!is_null($index_equipment) && $index_equipment != 0) {
            $query->where('training_equipment', $training_equipment)->get();
        }
        
        $training_sex = config('training_sex');
        $training_objective = config('training_objective');
        $training_part = config('training_part');
        $training_equipment = config('training_equipment');
        
        $data = [
            "training_sex" => $training_sex,
            "training_objective" => $training_objective,
            "traning_part" => $training_part,
            "traning_equipment" => $training_equipment,
        ];
        
        return view('/menu',$data);
    }
    
    
}
