<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;

class AddProjectForm extends Component
{
    public $isOpen = false;
    public $title;
    public $description;
    public $year;

    protected $listeners = ['openForm' => 'openForm'];

    public function openForm()
    {
        $this->isOpen = true;
    }

    public function closeForm()
    {
        $this->isOpen = false;
    }

    public function saveProject()
    {
        $project = Project::all();
        $this->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'year' => 'numeric|min:2000|max:2024'
        ]);

        Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'year' => $this->year
        ]);
        $this->emit('closeForm');
    }

    public function render()
    {
        return view('livewire.add-project-form');
    }
}
