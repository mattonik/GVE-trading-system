@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-2">
    		<a class="btn btn-white btn-block" href="{{ url('messages') }}">
    			<i class="fa fa-arrow-left"></i> Back
    		</a>
    		<ul class="nav nav-pills-light nav-stacked nav-compact nav-select padded-top padded-bottom">
    			<li class="active">
					<a href="{{ url('messages') }}">Inbox <span class="badge pull-right">{{ $inboxCount }}</span></a>
				</li>
				<li>
					<a href="{{ url('messages/sent') }}">Sent</a>
				</li>
    		</ul>
    	</div>
    	<div class="col-sm-10">
    		<div class="panel panel-default">
    			<div class="panel-body no-padding-top">
    				<h3 class="no-margin-top thin">Compose</h3>
    				<form class="form-horizontal" action="{{ url('message/send') }}" method="post">
    					<input type="hidden" name="_token" value="{{ csrf_token() }}">
			            <div class="form-group string">
			              	<label for="compose-to" class="control-label col-sm-1">To</label>
			              	<div class="col-sm-11">
			              		<select name="to_id" multiple aria-required="true" class="string form-control" rel="selectize-tags">
			              			@foreach ($users as $user)
			              			<option value="{{ $user->id }}" @if (isset($reply) && $message->from_id === $user->id)selected="selected"@endif>{{ $user->name }} {{ $user->surname }}</option>
			              			@endforeach
			              		</select>
			              	</div>
			            </div>
			            <div class="form-group string required">
			            	<label for="compose-subject" class="control-label col-sm-1">Subject</label>
			              	<div class="col-sm-11">
			                	<input aria-required="true" class="string string required form-control" maxlength="255" name="subject" placeholder="Subject" required="required" size="255" type="text" @if(isset($reply)) value="Re: {{ $message->subject }}" @endif @if(isset($forward)) value="{{ $message->subject }}" @endif>
			              	</div>
			            </div>
			            <div class="form-group text required">
			              	<label for="compose-message" class="control-label col-sm-1">Message</label>
			              	<div class="col-sm-11">
			                	<textarea aria-required="true" class="text required form-control" name="message" placeholder="Message" required="required" rel="summernote_message">
			                		@if(isset($reply) || isset($forward))<br /><br />---------<br />{{ $message->message }}@endif
			                	</textarea>
			              	</div>
			            </div>
			            <div class="form-group">
			              	<div class="col-sm-offset-1 col-sm-11">
			                	<button type="submit" class="btn btn-primary">
			                  		<i class="fa fa-paper-plane"></i> Send
			                	</button>
			              	</div>
			            </div>
			        </form>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection