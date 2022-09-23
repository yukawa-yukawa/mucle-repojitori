<?php

namespace App\Http\Controllers;

use App\Muscles;
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
            "training_part" => $training_part,
            "training_equipment" => $training_equipment,
        ];
        return view('posts/index',$data);
    }
    
    public function menu(Request $request, Muscles $muscles)
    {
        $index_sex = $request->input('sex');
        $index_objective = $request->input('objective');
        $index_part = $request->input('part');
        $index_equipment = $request->input('equipment');
        
        $query = muscles::query();
        
        if (!is_null($index_sex) && $index_sex != 0) {
            $query->where('sex_id',$index_sex)->get();
        }

        if (!is_null($index_objective) && $index_objective != 0) {
            $query->where('objective_id',$index_objective)->get();
        }

        if (!is_null($index_part) && $index_part != 0) {
            $query->where('part_id',$index_part)->get();
           //$query = $query->where('part_id',$index_part);
        }

        if (!is_null($index_equipment) && $index_equipment != 0) {
            $query->where('equipment_id',$index_equipment)->get();
        }
        
        $muscles = $query->get();
        $training_sex = config('training_sex');
        $training_objective = config('training_objective');
        $training_part = config('training_part');
        $training_equipment = config('training_equipment');
        
        $data = [
            "training_sex" => $training_sex,
            "training_objective" => $training_objective,
            "traning_part" => $training_part,
            "traning_equipment" => $training_equipment,
            "muscles" => $muscles,
        ];
        
        return view('posts/menu',$data);
    }
    
    
}
