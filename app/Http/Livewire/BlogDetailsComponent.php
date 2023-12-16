<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-details-component')->layout('layouts.base');
    }
}
