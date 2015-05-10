@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-2">
    		<a class="btn btn-primary btn-block" href="{{ url('message/new') }}">
    			<i class="fa fa-pencil"></i> Compose
    		</a>
    		<ul class="nav nav-pills-light nav-stacked nav-compact nav-select padded-top padded-bottom">
    			<li>
					<a href="{{ url('messages') }}">Inbox <span class="badge pull-right">{{ $inboxCount }}</span></a>
				</li>
				<li class="active">
					<a href="{{ url('messages/sent') }}">Sent</a>
				</li>
    		</ul>
    	</div>
    	<div class="col-sm-10">
    		<div class="panel panel-default">
    			<div class="panel-body no-padding-top">
    				<table class="table table-striped tablesaw tablesaw-stack" data-mode="stack">
    					<thead>
			            	<tr>
			                	<th class="inbox-toggles">
			                  		<label>
			                    		<input type="checkbox" rel="icheck" class="table-checkable">
			                  		</label>
			                  		<!--<label class="text-muted">
			                    		<i class="fa fa-star-o fa-lg"></i>
			                  		</label>-->
			                	</th>
			                	<th>To</th>
			                	<th>Message</th>
			                	<th class="hidden-xs">&nbsp;</th>
			                	<th class="hidden-xs">Sent</th>
			              	</tr>
			            </thead>
			            <tbody data-link="row" class="rowlink">
			            	@foreach ($messages as $message)
				            <tr class="inbox-row">
				                <td class="inbox-toggles">
				                	<label>
				                    	<input type="checkbox" rel="icheck" class="table-checkable-row">
				                	</label>
				                  	<!--<label class="text-warning">
				                    	<i class="fa fa-star-o fa-lg"></i>
				                  	</label>-->
				                </td>
				                <td class="inbox-name">
				                  	{{ $message->reciever->name }} {{ $message->reciever->surname }}
				                  	<span class="hidden-lg hidden-md hidden-sm">
				                    	<i class="fa fa-paperclip"></i>
				                  	</span>
				                </td>
				                <td class="inbox-email">
									<a href="{{ url('message/detail', ['id' => $message->id]) }}">
										<span>
											<span>{{ $message->subject }}</span>
				                    	</span>
									</a>                
									<td class="hidden-xs">
				                  		<i class="fa fa-paperclip"></i>
				                	</td>
				                </td>
				                <td class="hidden-xs inbox-info">
				                  	{{ $message->created_at }}
				                </td>
				            </tr>
				            @endforeach
				        </tbody>
    				</table>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection