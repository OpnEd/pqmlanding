<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('PQM - Nosotros')]
class Nosotros extends Component
{
    public function render()
    {
        return view('livewire.nosotros');
    }
}
