<!-- resources/views/sales/index.blade.php -->

<h1>Sale Transactions</h1>

<table>
    <!-- ... existing table code ... -->
</table>

<h2>Sell a Product</h2>

<form action="{{ route('sales.store') }}" method="post">
    @csrf

    <label for="product_id">Product:</label>
    <select name="product_id" required>
        @foreach ($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>

    <label for="quantity_sold">Quantity Sold:</label>
    <input type="number" name="quantity_sold" required />

    <label for="total_price">Total Price:</label>
    <input type="number" name="total_price" required />

    <button type="submit">Sell Product</button>
</form>
