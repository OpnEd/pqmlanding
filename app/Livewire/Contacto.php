<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactMessageForm;
use App\Models\ContactMessage;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('PQM - Contáctanos')]
class Contacto extends Component
{
    public ContactMessageForm $form;

    public function save()
    {
        $this->form->store();

        return redirect('tienda')->with('status', 'Mensaje enviado! Mientras te contactamos, te gustaría echar un ojo a nuestra tienda?');

    }

    public function render()
    {
        return view('livewire.contacto');
    }
}
