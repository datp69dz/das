<?php

namespace App\Http\Livewire;

use App\Services\MyClass\MyClassService;
use Livewire\Component;

class CreateClassForm extends Component
{
    public $classGroups;



    public function render()
    {
        return view('livewire.create-class-form');
    }
}
