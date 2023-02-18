<h1>Ubah Product</h1>

<form action="/products/{{ $product->id }}" method="POST">
    @method('PUT')
    @csrf
    Nama Produk : <input type="text" name='name' value="{{ $product->name }}"><br>
    Deskripsi : <input type="text" name='description'value="{{ $product->description }}"><br>
    Harga Jual : <input type="number" name="price"value="{{ $product->price }}"><br>
    Image URL : <input type="text" name="image_url"value="{{ $product->image_url }}"><br>
    <input type="submit" value="Simpan">
</form>