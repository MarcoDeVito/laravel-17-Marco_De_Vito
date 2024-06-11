<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
 
    public function increment($n=1)
    {
        $this->count+=$n;
    }
 
    public function decrement($n=1)
    {
        if(($this->count-$n)<0){
            return;
        }
        $this->count-=$n;
    }

    public function resetCount()
    {
        $this->count=0;
    }
 
 
    public function render()
    {
        return view('livewire.counter');
    }
}
