<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;


class SkillController extends Controller
{
    public function index()
    {
        $skills=Skill::all();
        return view('backend.skill.index',[
            'skills'=>$skills,
        ]);

    }
    public function store(Request $request)
    {
        $request->validate([
            "skill_name" => "required|string",
            "value" => "required|integer",
            "color" => "required|string",
        ]);
        $skill = new Skill();
        $skill->skill_name = $request->skill_name;
        $skill->color = $request->color;
        $skill->value = $request->value;
        $skill->save();
        if ($skill->save()) {
            $notification = array(
                'message' => 'Skill added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('skill.index')->with($notification);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            "skill_name" => "required|string",
            "color" => "required|string",
            "value" => "required|integer",
        ]);
        $skill=Skill::findOrFail($request->id);
        $skill->skill_name=$request->skill_name;
        $skill->color=$request->color;
        $skill->value=$request->value;
        $skill->save();
        if ($skill->save()) {
            $notification = array(
                'message' => 'Skill Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('skill.index')->with($notification);
        }

    }
    public function published($id)
    {
        $skill = Skill::findOrfail($id);
        $skill->status = 1;
        $skill->save();
        $notification = array(
            'message' => 'Skill Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.index')->with($notification);
    }
    public function unpublished($id)
    {
        $skill = Skill::findOrfail($id);
        $skill->status = 2;
        $skill->save();
        $notification = array(
            'message' => 'Skill Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.index')->with($notification);
    }


}
