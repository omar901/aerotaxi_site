<?php


namespace App\Http\Livewire;
header("Content-type: image/jpg");
use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    public $picture = '/flamenco_tank.jpg';
    protected $listeners = ['expandme' => 'expandme'];

 function expandme()
 {
     return view('/tank');
 }
 public function mount()
 {
     $this->picture = '/flamenco_tank.jpg';
 }
    public function render()
    {
        return view('livewire.picture-expand');
    }
}
