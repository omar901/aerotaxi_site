<?php


namespace App\Http\Livewire;
header("Content-type: image/jpg");
use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    public $picture = '/flamenco_tank.jpg';
    protected $listeners = ['refreshpicture' => 'expandme'];

 function expandme()
 {
     alert('Hello');
 }
    public function render()
    {
        return view('livewire.picture-expand', [
            'name' => 'Visitor',
            'picture' => '/flamenco_tank.jpg',
        ]);
    }
}
