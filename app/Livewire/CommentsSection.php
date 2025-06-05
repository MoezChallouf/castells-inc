<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Project;
use Livewire\Component;

class CommentsSection extends Component
{
    public Project $project;
    public $name;
    public $email;
    public $message;

    protected $listeners = [
    "echo-private:comments.{project.id},CommentCreated" => 'render'
    ];

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.comments-section', [
            'comments' => $this->project->comments()->latest()->get()
        ]);
    }

    public function addComment()
    {
        $this->validate();

        $comment = Comment::create([
            'project_id' => $this->project->id,
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);
    }
}
