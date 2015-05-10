@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-2">
    		<a class="btn btn-primary btn-block" href="{{ url('message/new') }}">
    			<i class="fa fa-pencil"></i> Compose
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
                <div class="panel-body">
                    <div class="btn-group pull-right">
                        <a href="{{ url('message/reply', ['id' => $message->id]) }}" type="button" class="btn btn-default">
                            <i class="fa fa-reply"></i>
                        </a>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('message/reply', ['id' => $message->id]) }}"><i class="fa fa-reply pull-right"></i> Reply</a></li>
                            <li><a href="{{ url('message/forward', ['id' => $message->id]) }}"><i class="fa fa-arrow-right pull-right"></i> Forward</a></li>
                            <!--<li class="divider"></li>
                            <li><a href="#">Mark as unread</a></li>
                            <li><a href="#">Delete</a></li>
                            <li><a href="#">Print</a></li>-->
                        </ul>
                    </div>
                    
                    <img class="pull-left margin-right img-circle" src="../../../images/faker/avatars/48/Faces_Users-08.png" />
                    <h3 class="no-margin-top thin">{{ $message->subject }}</h3>
                    <p>
                        <span class="pull-right">{{ $message->created_at }}</span>
                        <h5>{{ $message->sender->name }} {{ $message->sender->surname }}</h5>
                    </p>
                    
                    <div>
                        {!! $message->message !!}
                    </div>
                    
                    <hr class="no-margin-top">

                    <div class="stack-parent clearfix">
                        <p class="stack-child reply-trigger-container">
                            &nbsp;
                            Click here to <a class="reply-trigger" href="{{ url('message/reply', ['id' => $message->id]) }}">Reply</a> or <a class="reply-trigger" href="{{ url('message/forward', ['id' => $message->id]) }}">Forward</a>.
                        </p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection