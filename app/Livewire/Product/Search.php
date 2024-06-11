<?php

namespace App\Livewire\Product;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $keyword="";
    public function render()
    {
        if($this->keyword){
            
            dd(User::where("name","LIKE","%".$this->keyword."%")->get());
            
        }
        return view('livewire.product.search');
    }
}
