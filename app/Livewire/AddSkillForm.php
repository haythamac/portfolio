<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class AddSkillForm extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.add-skill-form', compact('categories'));
    }
}
