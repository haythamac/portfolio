<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;

class EditProjectForm extends Component
{
    public $project;
    public $projectId;

    public function mount()
    {
        $project = Project::find($this->projectId);
        $this->project = $project;
    }

    public function updateProject()
    {
        $this->emit('projectUpdated');
    }

    public function deleteProject()
    {
        $this->emit('projectDeleted');
    }
    public function render()
    {
        return view('livewire.edit-project-form');
    }
}
