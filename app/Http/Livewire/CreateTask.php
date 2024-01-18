<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class CreateTask extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|max:100|string'
    ];

    public function submit()
    {
        $this->validate();

        $this->createTask();

        $this->description = '';

        $this->emit('taskAdded');
    }

    public function createTask()
    {
        $userId = Auth::id();

        Task::create([
            'user_id' => $userId,
            'description' => $this->description
        ]);
    }

    public function render()
    {
        return view('livewire.create-task')
            ->layout('layouts.base');
    }
}
