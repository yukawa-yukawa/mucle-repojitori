<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Name;
use App\Muscle;
use App\Libraries\Common;

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
    
    public function menu(Request $request, Muscle $muscle)
    {
        $index_sex = $request->input('sex');
        $index_objective = $request->input('objective');
        $index_part = $request->input('part');
        $index_equipment = $request->input('equipment');
        
        $query = Muscle::query();
        
        //if (!is_null($index_sex) && $index_sex != 0) {
            $query->where('sex_id',$index_sex)->get();
        //}

        //if (!is_null($index_objective) && $index_objective != 0) {
            $query->where('objective_id',$index_objective)->get();
        //}

        //if (!is_null($index_part) && $index_part != 0) {
            $query->where('part_id',$index_part)->get();
           //$query = $query->where('part_id',$index_part);
        //}

        //if (!is_null($index_equipment) && $index_equipment != 0) {
            $query->where('equipment_id',$index_equipment)->get();
        //}
        
        //$muscles = $query->get();
        $muscles = $query->orderBy('id', 'asc')->get();
        //dd($muscles);
        
        $training_sex = config('training_sex');
        $training_objective = config('training_objective');
        $training_part = config('training_part');
        $training_equipment = config('training_equipment');
        
        //$muscle_id = \DB::table('muscles')->find($id);
        $max_lifting_weight = $request->input('max_lifting_weight');
        /*$ret = Common::training_set($muscle_id,$max_lifting_weight);*/
        
        $data = [
            "training_sex" => $training_sex,
            "training_objective" => $training_objective,
            "traning_part" => $training_part,
            "traning_equipment" => $training_equipment,
            "muscles" => $muscles,
            "max_lifting_weight" => $max_lifting_weight,
        ];
        
        return view('posts/menu',$data);
        return view('posts/menu',compact($max_lifting_weight));
    }
}
