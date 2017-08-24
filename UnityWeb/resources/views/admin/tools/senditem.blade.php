@extends('admin')

@section('content')

	<div class="col-sm-12 col-md-12">
		<div class="page-header">
			<h3>Tools / Send Item <br> <small>This will create the item and send it to the player via express mail.</small></h3>
		</div>


		<div class="col-sm-6">
			@include('includes.form-messages')

			<form action="{{ action('Admin\ToolsController@postSendItem') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label>Player Name</label>
					<input type="text" name="player" class="form-control" value="{{ old('player') }}">
				</div>

				<div class="form-group">
					<label>Item ID</label>
					<input type="text" name="item_id" class="form-control" value="{{ old('item_id') }}">
				</div>

				<div class="form-group">
					<label>Quantity</label>
					<input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
				</div>

				<div class="form-group">
					<label>Enchant</label>
					<input type="text" name="enchant" class="form-control" value="{{ old('enchant') }}">
				</div>

				<div class="form-group">
					<label>Temperance</label>
					<input type="text" name="temperance" class="form-control" value="{{ old('temperance') }}">
				</div>

				<div class="form-group">
					<label>Amplify</label>
					<select name="amplify" class="form-control">
						<option value="-1">-- Select Option --</option>
						<option value="0">No</option>
						<option value="1">Yes</option>
					</select>
				</div>

				<div class="form-group">
					<label>Stackable</label>
					<select name="stackable" class="form-control">
						<option value="-1">-- Select Option --</option>
						<option value="0">No</option>
						<option value="1">Yes</option>
					</select>
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Send Item" class="btn btn-primary">
				</div>
			</form>
		</div>


	</div>

@endsection