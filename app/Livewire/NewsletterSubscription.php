<?php

namespace App\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class NewsletterSubscription extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:newsletters,email',
    ];

    public function submit()
    {
        $this->validate();

        Newsletter::create([
            'name' => $this->name,
            'email' => $this->email
        ]);

        // Clear form fields
        $this->reset(['name', 'email']);

        // Show success message
        session()->flash('success', 'Thank you for subscribing!');
    }

    public function render()
    {
        return view('livewire.newsletter-subscription');
    }
}
