<!-- resources/views/products/edit.blade.php -->

<h1>Edit Product</h1>

<form action="{{ route('products.update', $product) }}" method="post">
    @csrf @method('put')

    <label for="name">Product Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required />

    <label for="price">Product Price:</label>
    <input type="number" name="price" value="{{ $product->price }}" required />

    <label for="quantity">Product Quantity:</label>
    <input
        type="number"
        name="quantity"
        value="{{ $product->quantity }}"
        required
    />

    <button type="submit">Update Product</button>
</form>
