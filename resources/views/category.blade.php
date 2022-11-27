@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($categories as $category)
    <x-category-items :category="$category"/>      
    @endforeach
</div>
@endsection