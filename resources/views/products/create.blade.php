<h1>Create Product</h1>

<form action="/products" method="POST">
    @csrf
    Nama Produk : <input type="text" name='name'><br>
    Deskripsi : <input type="text" name='description'><br>
    Harga Jual : <input type="number" name="price"><br>
    Image URL : <input type="text" name="image_url"><br>
    <input type="submit" value="Simpan">
</form>