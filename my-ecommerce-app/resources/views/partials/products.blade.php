<div class="product-list">  
    @foreach ($products as $product)  
        <div class="product-card">  
            <div class="product-image">  
                @if ($product->images->isNotEmpty())