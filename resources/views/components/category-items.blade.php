
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @props(['category'])
<div>
        <div class="fs-3"><strong><u> {{ $category->name }} </u></strong></div>
        @foreach ($category->children as $child)
            <div class="fs-4" style="margin-left:20px">
                <x-category-items :category="$child" />
            </div>
                @foreach ($child->products as $p_child)
                <div class="fs-4" style="margin-left:30px">
                <i class="glyphicon glyphicon-minus">{{ $p_child->name }} </i>
                </div>
                 
                @endforeach
               
            
        @endforeach
        
            
</div>

