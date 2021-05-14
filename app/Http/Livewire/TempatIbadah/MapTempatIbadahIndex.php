<?php

namespace App\Http\Livewire\TempatIbadah;

use Livewire\Component;

class MapTempatIbadahIndex extends Component
{
    protected $listener = ['testMethod','showAlert'];
    public $value = 0;

    public function render()
    {
        return view('livewire.tempat-ibadah.map-tempat-ibadah-index');
    }

    public function testMethod()
    {
        $this->value = rand(1,10);
    }
}
