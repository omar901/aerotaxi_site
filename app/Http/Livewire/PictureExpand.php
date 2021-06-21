<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    
    public function render()
    {
        return view('livewire.picture-expand', [
            'name' => 'Visitor',
        ]);
    }
}
