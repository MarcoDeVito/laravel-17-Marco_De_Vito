<?php

namespace App\Livewire\Product;
use Livewire\WithPagination;
use Livewire\Attributes\On; 

use App\Models\Product;
use Livewire\Component;


class ListProd extends Component
{
    
    use WithPagination;
    
   

    public function render()
    {   
        
        return view('livewire.product.list-prod', [
            'products' => Product::paginate(10),
        ]);
    }
}
