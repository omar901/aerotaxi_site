<?php


namespace App\Http\Livewire;
header("Content-type: image/jpg");
use Livewire\Component;

class PictureExpand extends Component
{
    public $name = 'Visitor';
    public $picture = '/flamenco_tank.jpg';
    protected $listeners = ['refreshpicture' => 'expandme'];

    public function expandme()
    {
       $imgzize = imagecreatefromjpeg('img/flamenco_tank.jpg');
       $filesize = $_FILES["uploaded_file"]["img/flamenco_tank.jpg"];
       $resized = imagecreatetruecolor(1024,1024);
       imagecopyresampled($resized,$imgzize, 0,0,0,0, 1024,1024, 200,200);
       imagejpeg($resized, "RESIZED.jpg");
       return $resized;

    }

    public function render()
    {
        return view('livewire.picture-expand', [
            'name' => 'Visitor',
            'picture' => '/flamenco_tank.jpg',
        ]);
    }
}
