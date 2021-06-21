<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    public $picture = '/flamenco_tank.jpg';
    protected $listeners = ['refreshpicture' => 'expandme'];

    public function expandme()
    {
       $imgzize = getimagesize('img/flamenco_tank.jpg');
       return $imgzize;

    }

    public function render()
    {
        return view('livewire.picture-expand', [
            'name' => 'Visitor',
            'picture' => '/flamenco_tank.jpg',
        ]);
    }
}
