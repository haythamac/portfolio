<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('welcome', compact('projects'));
    }
    public function store(Request $request)
    {
        // gawa ka na model ng skills, portfolio, etc
        // then lagay mo dito yung logic
        // then display mo
        // wag mo kalimutan yung auth para ikaw lang ang makaka-access
        // remove mo yung register para di makagawa iba accidentally
        $data = new Project;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->year = $request->year;

        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('project-images', $imageName);
        $data->image = $imageName;

        $data->save();

        return redirect()->route('home.index')->with('message', 'Project added successfully');
    }
}
