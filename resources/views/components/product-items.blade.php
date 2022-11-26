
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @props(['product'])
    {{dd(product)}}
<div>
        <div ><strong>{{ $product->id }} {{ $product->name }}</strong></div>
        @foreach ($product->children as $child)
            <div style="margin-left:20px">
                <x-category-items :category="$child" />
            </div>
        @endforeach
            
</div>