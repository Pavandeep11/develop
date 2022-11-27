
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @props(['category'])
<div>
        <div ><strong>{{ $category->id }} {{ $category->name }}</strong></div>
        
        @foreach ($category->children as $child)
            <div style="margin-left:20px">
                <x-category-items :category="$child" />
            </div>
        @endforeach
            
</div>

