<h1>List Produk</h1>

<table>
    <thead>
        <tr>
            <th>Nama </th>
            <th>Deskripsi</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td> 
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td> 
            <td><a href="/products/{{ $product->id }}/edit">Edit</a></td>
            <td>
                <form action="products/{{ $product->id }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Hapus">
                </form>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
    <a href="/products/create">Create</a>


</table>
