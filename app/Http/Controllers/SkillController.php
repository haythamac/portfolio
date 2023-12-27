<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Category;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        $skill = new Skill;

        $skill->name = $request->name;
        $skill->category = $request->category;
        $skill->percent = $request->percent;

        $skill->save();

        return redirect()->route('home.index')->with('message', 'Skill added successfully');
    }

    public function storeCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->route('home.index')->with('message', 'Category added successfully');
    }
}
