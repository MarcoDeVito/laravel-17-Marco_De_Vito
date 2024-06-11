<div>
   
    <table class="table border mt-2">
    
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                </tr>
            </thead>
      
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">#{{ $product->id }}</th>

                    <td>{{ $product->title }}</td>
                    <td>
                        {{ $product->content }}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $products->links() }}
</div>