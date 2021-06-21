<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    public $picture = '';
    protected $listeners = ['refreshpicture' => 'expandme'];

    public function expandme()
    {
        $this->emit('expandme');
    }

    public function render()
    {
        return view('livewire.picture-expand', [
            'name' => 'Visitor',
        ]);
    }
}
