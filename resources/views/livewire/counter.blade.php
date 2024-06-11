<div>
    <div class="container">
        <div class="mt-5">
            <div class="container d-flex align-items-center gap-3 justify-content-center">
                <button  class="btn btn-success" wire:click="resetCount">reset</button>
                <button  class="btn btn-primary" wire:click="increment">+</button>
                <button  class="btn btn-danger" wire:click="decrement">-</button>
                <h1>{{ $count }}</h1> 
                <button  class="btn btn-primary" wire:click="increment(10)">+10</button>
                <button  class="btn btn-danger" wire:click="decrement(10)">-10</button>
            </div>

        </div>
    </div>
</div>
