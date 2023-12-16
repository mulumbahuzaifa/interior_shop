<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogsComponent extends Component
{
    public function render()
    {
        return view('livewire.blogs-component')->layout('layouts.base');
    }
}
