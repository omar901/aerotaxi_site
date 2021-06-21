<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    public $picture = 'flamenco_tank.jpg';
    protected $listeners = ['refreshpicture' => 'expandme'];

    public function expandme($picture)
    {
        $this->emit('expandme');
    }

    public function render()
    {
        return view('livewire.picture-expand', [
            'name' => 'Visitor',
            'picture' => '/flamenco_tank.jpg',
        ]);
    }
}
