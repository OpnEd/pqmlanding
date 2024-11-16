<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('PQM - Bienvenidos')]
class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome');
    }
}
