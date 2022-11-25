@extends('layouts') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="product/create" class="btn btn-outline-primary">Add new
				product</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Product Title</th>
						<th scope="col" class="pr-5">Price (USD)</th>
						<th scope="col">Short Notes</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($products as $product)
					<tr>
						<td>{!! $product->name !!}</td>
						<td class="pr-5 text-right">{!! $product->price !!}</td>
						<td>{!! $product->price !!}</td>
						
					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection