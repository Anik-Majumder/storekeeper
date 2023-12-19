<!-- resources/views/products/create.blade.php -->

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required />

    <label for="price">Product Price:</label>
    <input type="number" name="price" required />

    <label for="quantity">Product Quantity:</label>
    <input type="number" name="quantity" required />

    <button type="submit">Add Product</button>
</form>
