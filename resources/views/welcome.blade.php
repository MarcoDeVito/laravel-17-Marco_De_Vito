<x-layouts.app>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

        <div class="container mt-5">
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco Articoli inseriti</h3>


                @livewire('product.search')

                
            </div>
            @livewire('product.list-prod')
        </div>
    </div>
</x-layouts.app>