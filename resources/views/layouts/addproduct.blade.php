@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
    <h3>Add Product</h3>
    <form name="store-form" method="post" action="{{url('store-form')}}">
        <div class="mb-3">
        <label for="inputname">Name</label>
        <input type="text" class="form-control" name="name" value="" placeholder="Enter Name">
        @csrf
        </div>
        <div class="mb-3">
        <label for="inputPrice">Price</label>
        <input type="text" class="form-control" name="price" value="" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="exampleInputActive">Status</label>
                <select class="form-control" name="active" >
                    <option value=1>Active</option>
                    <option value=0>Deactive</option>
                </select>
        </div>
         <div class="mb-3">
         <label for="exampleInputActive">Categories</label>
            <select class="form-control" name="category_id" >
                @foreach ($categories as $category )
                    <option value={{$category->id}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>

@endsection