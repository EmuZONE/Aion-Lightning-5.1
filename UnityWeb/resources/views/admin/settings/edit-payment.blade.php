@extends('admin')

@section('content')


	<div class="col-sm-12 col-md-12">
		<form action="{{ action('Admin\SettingsController@postEditPayment') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="page-header">
			<h3>Payment Settings Edit
			<small>
				<input class="btn btn-primary btn-xs pull-right" type="submit" value="Update Settings">
				<a class="btn btn-danger btn-xs pull-right fr" href="{{ action('Admin\SettingsController@getIndex') }}">Cancel Edit</a>
			</small></h3>

			@include('includes.form-messages')
		</div>

		@if ( ! empty($payment))
			<div class="col-sm-3">

				<div class="form-group">
					<label>Paypal Donate</label>
					<select name="paypal_status" class="form-control">
						<option value="0" {{ $payment->paypal_status == 0 ? 'selected="selected"' : '' }}>Disabled</option>
						<option value="1" {{ $payment->paypal_status == 1 ? 'selected="selected"' : '' }}>Enabled</option>
					</select>
				</div>

				<div class="form-group">
					<label>Paypal Mode</label>
					<select name="paypal_test_mode" class="form-control">
						<option value="0" {{ $payment->paypal_test_mode == 0 ? 'selected="selected"' : '' }}>Live</option>
						<option value="1" {{ $payment->paypal_test_mode == 1 ? 'selected="selected"' : '' }}>Test</option>
					</select>
				</div>

				<div class="form-group">
					<label>Paypal Api Username</label>
					<input type="text" name="paypal_api_username" class="form-control" value="{{ $payment->paypal_api_username }}">
				</div>

				<div class="form-group">
					<label>Paypal Api Password</label>
					<input type="text" name="paypal_api_password" class="form-control" value="{{ $payment->paypal_api_password }}">
				</div>

				<div class="form-group">
					<label>Paypal Api Signature</label>
					<input type="text" name="paypal_api_signature" class="form-control" value="{{ $payment->paypal_api_signature }}">
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group">
					<label>Paypal Donate Points</label>
					<input type="text" name="paypal_donate_points" class="form-control" value="{{ $payment->paypal_donate_points }}">
				</div>

				<div class="form-group">
					<label>Paypal Donate Toll</label>
					<input type="text" name="paypal_donate_toll" class="form-control" value="{{ $payment->paypal_donate_toll }}">
				</div>

				<div class="form-group">
					<label>Donate Rates</label>
					<input type="text" name="donate_rates" class="form-control" value="{{ $payment->donate_rates }}">
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group">
					<label>Paymentwall Donate</label>
					<select name="paymentwall_status" class="form-control">
						<option value="0" {{ $payment->paymentwall_status == 0 ? 'selected="selected"' : '' }}>Disabled</option>
						<option value="1" {{ $payment->paymentwall_status == 1 ? 'selected="selected"' : '' }}>Enabled</option>
					</select>
				</div>

				<div class="form-group">
					<label>Paymentwall Project Key</label>
					<input type="text" name="paymentwall_public_key" class="form-control" value="{{ $payment->paymentwall_public_key }}">
				</div>

				<div class="form-group">
					<label>Paymentwall Secret Key</label>
					<input type="text" name="paymentwall_private_key" class="form-control" value="{{ $payment->paymentwall_private_key }}">
				</div>
			</div>

			<div class="col-sm-3">
				<div class="form-group">
					<label>Super Rewards Donate</label>
					<select name="super_rewards_status" class="form-control">
						<option value="0" {{ $payment->super_rewards_status == 0 ? 'selected="selected"' : '' }}>Disabled</option>
						<option value="1" {{ $payment->super_rewards_status == 1 ? 'selected="selected"' : '' }}>Enabled</option>
					</select>
				</div>

				<div class="form-group">
					<label>Super Rewards App Hash</label>
					<input type="text" name="super_rewards_public_key" class="form-control" value="{{ $payment->super_rewards_public_key }}">
				</div>

				<div class="form-group">
					<label>Super Rewards Postback Key</label>
					<input type="text" name="super_rewards_private_key" class="form-control" value="{{ $payment->super_rewards_private_key }}">
				</div>
			</div>

		</form>
		@else
			No Payment settings available.
		@endif
	</div>

@endsection