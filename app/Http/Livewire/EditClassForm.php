<?php

namespace App\Http\Livewire;

use App\Models\MyClass;
use App\Services\MyClass\MyClassService;
use Livewire\Component;

class EditClassForm extends Component
{
    public MyClass $myClass;

    public function render()
    {
        return view('livewire.edit-class-form');
    }
}
